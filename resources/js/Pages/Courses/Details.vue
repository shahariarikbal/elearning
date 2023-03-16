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
                                    <iframe width="560" height="315" :src="course.video_url" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                                    <div class="course-review-item">
                                        <img :src="'/frontend/images/user-default.png'" class="user-image">
                                        <div class="course-review-content">
                                            <h5 class="author-name">
                                                Shakib Hossain <span class="review-date"> - 10 months ago</span>
                                            </h5>
                                            <p class="review-message">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                            </p>
                                            <button data-bs-toggle="modal" data-bs-target="#reply-modal-2241" class="badge bg-success text-uppercase">Reply</button>
                                        </div>
                                    </div>
                                    <div class="course-review-item reply">
                                        <img :src="'/frontend/images/user-default.png'" class="user-image">
                                        <div class="course-review-reply-content">
                                            <h5 class="author-name">
                                                Shakib Hossain <span class="review-date"> - 10 months ago</span>
                                            </h5>
                                            <p class="review-message">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt.
                                            </p>
                                            <button data-bs-toggle="modal" data-bs-target="#comment-modal-2357" class="badge bg-warning text-uppercase">Edit</button>
                                            <button data-bs-toggle="modal" data-bs-target="#comment-modal-2357" class="badge bg-danger text-uppercase">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="$page.props.auth.user">
                                    <form action="" method="" class="review-form form-group">
                                        <label for="message">Enter your message here:</label>
                                        <textarea class="form-control " name="message" rows="5"></textarea>
                                        <button type="submit" class="btn btn-sm">Submit</button>
                                    </form>
                                </div>
                                <div v-else>Login first</div>
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

const props = defineProps({
    course: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({});
</script>

<style scoped>

</style>
