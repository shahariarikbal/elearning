<template>
    <div>
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
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <h2 class="all-course-button-title">
                                    আমাদের কোর্স তালিকা
                                </h2>
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    Home
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    Profile
                                </button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Messages
                                </button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    Settings
                                </button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <!-- Course -->
                                    <section class="all-course-section">
                                        <div class="container">
                                            <div class="section-title-outer">
                                                <h2 class="title">
                                                    আমাদের <span class="separate-color">অনলাইন কোর্স </span>
                                                </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img :src="'/frontend/images/course/course1.jpg'">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <del class="origin-price">15,000.00 ৳</del>
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">Motion Design Professional Course (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img :src="'/frontend/images/course/course2.jpg'">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img :src="'/frontend/images/course/course3.jpg'">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">15,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
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
                                        <div class="container">
                                            <div class="section-title-outer">
                                                <h2 class="title">
                                                    আমাদের <span class="separate-color">অফলাইন কোর্স </span>
                                                </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course1.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <del class="origin-price">15,000.00 ৳</del>
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">Motion Design Professional Course (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course2.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course3.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">15,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
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
                                        <div class="container">
                                            <div class="section-title-outer">
                                                <h2 class="title">
                                                    আমাদের <span class="separate-color">রেকর্ড কোর্স</span>
                                                </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course1.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <del class="origin-price">15,000.00 ৳</del>
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">Motion Design Professional Course (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course2.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course3.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">15,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
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
                                        <div class="container">
                                            <div class="section-title-outer">
                                                <h2 class="title">
                                                    আমাদের <span class="separate-color">ফ্রি কোর্স</span>
                                                </h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <a href="course-details.html" class="course-item-image-outer">
                                                            <img src="assets/images/course/course1.jpg">
                                                        </a>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <del class="origin-price">15,000.00 ৳</del>
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="course-details.html" class="course-title">Motion Design Professional Course (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <div class="course-item-image-outer">
                                                            <img src="assets/images/course/course2.jpg">
                                                        </div>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">9,000.00 ৳</span>
                                                            </div>
                                                            <a href="#" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
                                                                </div>
                                                                <div class="meta-item course-students">
                                                                    <i class="far fa-user"></i>
                                                                    300 Students
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="course-item-wrap">
                                                        <div class="course-item-image-outer">
                                                            <img src="assets/images/course/course3.jpg">
                                                        </div>
                                                        <div class="course-item-content">
                                                            <div class="course-price">
                                                                <span class="discount-price">15,000.00 ৳</span>
                                                            </div>
                                                            <a href="#" class="course-title">UI UX Design Professional Course for Beginners (Online Batch)</a>
                                                            <div class="course-meta">
                                                                <div class="meta-item course-lesson">
                                                                    <i class="far fa-file-alt"></i>
                                                                    24 Lessons
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
            </section>
            <!-- /Course -->
        </main>
    </div>
</template>

<script>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
export default {
    layout: Layout,
    components:{ Footer, NavLink }
}
</script>

<style scoped>

</style>
