<template>
    <Head title="Welcome" />
    <Layout />
    <!-- /Header -->
    <main>
        <!-- Home -->
        <section class="home-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="home-sec-left-side-wrap">
                            <h1 class="title">
                                {{ slider.title }}
                            </h1>
                            <p class="sub-title">
                                {{ slider.sub_title }}
                            </p>
                            <div class="home-sec-left-link-outer">
                                <NavLink href="/courses" class="course-link">কোর্সগুলো দেখুন</NavLink>
                                <NavLink href="/user/login" class="login-link">লগ ইন / সাইন আপ</NavLink>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-sec-right-side-wrap">
                            <img :src="'/slider/' + slider.image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Home -->

        <!-- Achievement -->
        <section class="our-achievment-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">অর্জন</span> সমূহ
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                10000 <span>+</span>
                            </h4>
                            <h6 class="name">
                                নিবন্ধিত শিক্ষার্থী
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                10
                            </h4>
                            <h6 class="name">
                                ট্রেইনার
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                15
                            </h4>
                            <h6 class="name">
                                মোট কোর্স
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                10000 <span>%</span>
                            </h4>
                            <h6 class="name">
                                সফল শিক্ষার্থী
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Achievement -->

        <!-- About Us -->
        <section class="about-us-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        কেন <span class="separate-color">আমরা </span> সেরা
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="service in services" :key="service.id">
                        <div class="about-item-wrap">
                            <img :src="'/service/' + service.image" class="image">
                            <h4 class="title">
                                {{ service.title }}
                            </h4>
                            <p class="text">
                                {{ service.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Us -->

        <!-- Course -->
        <section class="course-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">অনলাইন কোর্স </span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="onlineCourse in onlineCourses">

                        <div class="course-item-wrap">
                            <NavLink :href="'course/details/' + onlineCourse.id + '/' + onlineCourse.slug " class="course-item-image-outer">
                                <img :src="'course/' + onlineCourse.image" alt="course image" />
                            </NavLink>
                            <div class="course-item-content">
                                <div class="course-price" v-if="onlineCourse.discount_price != null">                                    
                                    <span class="discount-price">{{ onlineCourse.discount_price }} ৳</span>
                                    <del class="origin-price">{{ onlineCourse.real_price }} ৳</del>
                                </div>
                                <div class="course-price" v-else>                                    
                                    <span class="discount-price">{{ onlineCourse.real_price }} ৳</span>
                                    <del class="origin-price">{{ onlineCourse.discount_price }} ৳</del>
                                </div>
                                <NavLink :href="'course/details/' + onlineCourse.id + '/' + onlineCourse.slug " class="course-title">{{ onlineCourse.title }}</NavLink>
                                <div class="course-meta">
                                    <div class="meta-item course-lesson">
                                        <i class="far fa-file-alt"></i>
                                        {{ onlineCourse.lesson }} Lessons
                                    </div>
                                    <div class="meta-item course-students">
                                        <i class="far fa-user"></i>
                                        300 Students
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->

        <!-- Course -->
        <section class="course-section" style="background: #EFF2F6;">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">অফলাইন কোর্স </span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="offlineCourse in offlineCourses">
                        <div class="course-item-wrap">
                            <NavLink :href="'course/details/' + offlineCourse.id + '/' + offlineCourse.slug" class="course-item-image-outer">
                                <img :src="'course/' + offlineCourse.image">
                            </NavLink>
                            <div class="course-item-content">
                                <div class="course-price" v-if="offlineCourse.discount_price != null">                                    
                                    <span class="discount-price">{{ offlineCourse.discount_price }} ৳</span>
                                    <del class="origin-price">{{ offlineCourse.real_price }} ৳</del>
                                </div>
                                <div class="course-price" v-else>                                    
                                    <span class="discount-price">{{ offlineCourse.real_price }} ৳</span>
                                    <del class="origin-price">{{ offlineCourse.discount_price }} ৳</del>
                                </div>
                                <NavLink :href="'course/details/' + offlineCourse.id + '/' + offlineCourse.slug" class="course-title">{{ offlineCourse.title }}</NavLink>
                                <div class="course-meta">
                                    <div class="meta-item course-lesson">
                                        <i class="far fa-file-alt"></i>
                                        {{ offlineCourse.lesson }} Lessons
                                    </div>
                                    <div class="meta-item course-students">
                                        <i class="far fa-user"></i>
                                        300 Students
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->

        <!-- Course -->
        <section class="course-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">রেকর্ড কোর্স</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="recordCourse in recordCourses">
                        <div class="course-item-wrap">
                            <NavLink :href="'course/details/' + recordCourse.id + '/' + recordCourse.slug" class="course-item-image-outer">
                                <img :src="'course/' + recordCourse.image">
                            </NavLink>
                            <div class="course-item-content">
                                <div class="course-price" v-if="recordCourse.discount_price != null">                                    
                                    <span class="discount-price">{{ recordCourse.discount_price }} ৳</span>
                                    <del class="origin-price">{{ recordCourse.real_price }} ৳</del>
                                </div>
                                <div class="course-price" v-else>                                    
                                    <span class="discount-price">{{ recordCourse.real_price }} ৳</span>
                                    <del class="origin-price">{{ recordCourse.discount_price }} ৳</del>
                                </div>
                                <NavLink :href="'course/details/' + recordCourse.id + '/' + recordCourse.slug" class="course-title">{{ recordCourse.title }}</NavLink>
                                <div class="course-meta">
                                    <div class="meta-item course-lesson">
                                        <i class="far fa-file-alt"></i>
                                        {{ recordCourse.lesson }} Lessons
                                    </div>
                                    <div class="meta-item course-students">
                                        <i class="far fa-user"></i>
                                        300 Students
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->

        <!-- Course -->
        <section class="course-section" style="background: rgb(239, 242, 246);">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">ফ্রি কোর্স</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" v-for="freeCourse in freeCourses">
                        <div class="course-item-wrap">
                            <NavLink :href="'course/details/' + freeCourse.id + '/' + freeCourse.slug" class="course-item-image-outer">
                                <img :src="'course/' + freeCourse.image">
                            </NavLink>
                            <div class="course-item-content">
                                <div class="course-price" v-if="freeCourse.discount_price != null">                                    
                                    <span class="discount-price">{{ freeCourse.discount_price }} ৳</span>
                                    <del class="origin-price">{{ freeCourse.real_price }} ৳</del>
                                </div>
                                <div class="course-price" v-else>                                    
                                    <span class="discount-price">{{ freeCourse.real_price }} ৳</span>
                                    <del class="origin-price">{{ freeCourse.discount_price }} ৳</del>
                                </div>
                                <NavLink :href="'course/details/' + freeCourse.id + '/' + freeCourse.slug" class="course-title">{{ freeCourse.title }}</NavLink>
                                <div class="course-meta">
                                    <div class="meta-item course-lesson">
                                        <i class="far fa-file-alt"></i>
                                        {{ freeCourse.lesson }} Lessons
                                    </div>
                                    <div class="meta-item course-students">
                                        <i class="far fa-user"></i>
                                        300 Students
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->
    </main>

    <!-- Footer -->
    <Footer />
    <!-- /Footer -->
</template>

<script setup>
    import Layout from '../Shared/Layout.vue';
    import Footer from '../Shared/Footer.vue';
    import NavLink from '../Shared/NavLink.vue';
    import {useForm} from "@inertiajs/vue3";
    const props = defineProps({
        slider: {
            type: Object,
            default: () => ({})
        },
        services: {
            type: Object,
            default: () => ({})
        },
        onlineCourses: {
            type: Object,
            default: () => ({})
        },
        offlineCourses: {
            type: Object,
            default: () => ({})
        },
        freeCourses: {
            type: Object,
            default: () => ({})
        },
        recordCourses: {
            type: Object,
            default: () => ({})
        }
    });
    const form = useForm({});
    // export default {
    //     layout: Layout,
    //     components:{ Footer, NavLink }
    // }
</script>

<style>

</style>
