<template>
    <div>
        <Head title="Welcome" />
        <Layout />
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Course Details</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    single
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Course details -->
            <section class="course-details-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="course-details-wrapper">
                                <div class="course-details-video">
                                    <iframe width="100%" height="315" :src="course.video_url" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="course-details-outer">
                                    <h3 class="title">
                                        {{ course.title }} কোর্সটি থেকে যা শিখবেন..
                                    </h3>
                                    <p class="description">
                                        {{ course.long_description }}
                                    </p>
                                    <!-- <p class="description">
                                        আপনাকে একজন সফল  ফ্রিল্যান্সার হতে সর্বোচ্চ সহযোগীতা করবে।
                                    </p>
                                    <p class="description">
                                        মার্কেটপ্লেসে নিজের আকর্ষনীয় প্রোফাইল তৈরী এবং কাজ পাবার পদ্ধতি সম্পর্কে বিস্তারিত জানতে পারবেন
                                    </p>
                                    <p class="description">
                                        আপনাকে একজন সফল  ফ্রিল্যান্সার হতে সর্বোচ্চ সহযোগীতা করবে।
                                    </p> -->
                                </div>
                                <div class="course-review-outer">
                                    <h4 class="title">
                                        শিক্ষার্থীদের মতামত
                                    </h4>
                                    <div class="course-review-item" v-for="comment in course.comments" :key="comment.id">
                                        <img :src="'/frontend/images/user-default.png'" class="user-image">
                                        <div class="course-review-content">
                                            <h5 class="author-name">
                                                {{ comment.user.first_name }} <span class="review-date"></span>
                                            </h5>
                                            <p class="review-message">
                                                {{ comment.message }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="$page.props.user.userId">
                                    <form @submit.prevent="submit" method="post" class="review-form form-group">
                                        <label for="message">Enter your message here:</label>
                                        <textarea class="form-control " name="message" v-model="form.message" rows="5"></textarea>
                                        <input type="hidden" name="user_id" class="form-control" v-model="form.user_id" />
                                        <button type="submit" class="btn btn-sm" :disabled="form.processing" :class="{ 'opacity-25': form.processing }">Submit</button>
                                    </form>
                                </div>
                                <div class="" v-else>
                                    <NavLink href="/user/login" class="nav-item-link login-logout">
                                        লগ ইন / সাইন আপ
                                    </NavLink>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="course-details-sidebar-wrapper">
                                <div class="course-price-outer">
                                    <span class="price" v-if="course.discount_price != null">{{ course.discount_price }} BDT</span>
                                    <span class="price" v-else>{{ course.real_price }} BDT</span>
                                </div>
                                <div class="course-instructor-outer">
                                    <div class="course-instructor-image">
                                        <img :src="'/trainer/' + course.trainer.avatar" alt="trainer" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="course-instructor-name">
                                        <a href="#" class="instructor-name">{{ course.trainer.name }}</a>
                                        <p class="instructor-des">{{ course.trainer.designation_expertise }}</p>
                                    </div>
                                </div>
                                <ul>
                                    <!-- <li>
                                        <strong>ক্যাটাগরিঃ</strong> <span>Marketplace</span>
                                    </li> -->
                                    <li>
                                        <strong>কোর্সটি করছেনঃ</strong> <span>১৩,৮১৯ শিক্ষার্থী</span>
                                    </li>
                                    <li>
                                        <strong>ভিডিও সংখ্যাঃ</strong> <span>{{ course.lesson }}</span>
                                    </li>
                                    <li>
                                        <strong>সময় লাগবেঃ</strong> <span>{{ course.duration }}</span>
                                    </li>
                                    <!-- <li>
                                        <i class="fas fa-certificate"></i>
                                        <strong>সর্বশেষ সংষ্করণঃ</strong> <span>{{ course.updated_at }}</span>
                                    </li> -->
                                </ul>
                                <NavLink :href="'/user/register/' + course.id + '/' + course.slug " class="course-details-btn-inner">কোর্সটি শুরু করুন</NavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Course details -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
import {useForm} from "@inertiajs/vue3";
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
const user = computed(() => usePage().props.user.userId)

const props = defineProps({
    course: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    message: '',
    user_id: user,
    course_id: props.course.id
});

const submit = () => {
    form.post(route("comment.store"), {
        onSuccess: () => form.reset(),
    });
};

</script>

<style scoped>

</style>
