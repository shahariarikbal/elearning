<template>
    <div>
        <Layout />
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">All Course</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Course
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Course -->
            <section class="course-details-section">
                <div class="container">
                    <div class="all-course-tab-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <h2 class="all-course-button-title">
                                        আমাদের কোর্স তালিকা
                                    </h2>
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        Online Course
                                    </button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        Offline Course
                                    </button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        Record Course
                                    </button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        Free Course
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <!-- Course -->
                                        <section class="all-course-section">
                                            <div class="">
                                                <div class="section-title-outer">
                                                    <h2 class="title">
                                                        আমাদের <span class="separate-color">অনলাইন কোর্স</span>
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12" v-for="onlineCourse in onlineCourses">
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
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <!-- Course -->
                                        <section class="all-course-section">
                                            <div class="">
                                                <div class="section-title-outer">
                                                    <h2 class="title">
                                                        আমাদের <span class="separate-color">অফলাইন কোর্স </span>
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12" v-for="offlineCourse in offlineCourses">
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
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <!-- Course -->
                                        <section class="all-course-section">
                                            <div class="">
                                                <div class="section-title-outer">
                                                    <h2 class="title">
                                                        আমাদের <span class="separate-color">রেকর্ড কোর্স</span>
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12" v-for="recordCourse in recordCourses">
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
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <!-- Course -->
                                        <section class="all-course-section">
                                            <div class="">
                                                <div class="section-title-outer">
                                                    <h2 class="title">
                                                        আমাদের <span class="separate-color">ফ্রি কোর্স</span>
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12" v-for="freeCourse in freeCourses">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Course -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';

const props = defineProps({
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
</script>

<style scoped>

</style>
