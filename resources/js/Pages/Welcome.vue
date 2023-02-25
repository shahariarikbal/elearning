<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <header class="header-section">
        <nav class="nav-items-wrapper">
            <a href="#" class="navbar-brand">
                <img class="brand" :src="'frontend/images/logo.png'" alt="Logo">
            </a>
            <div class="nav-toggle-btn">
                <div class="btn-inner"></div>
            </div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-item-link active">
                        <i class="fas fa-home"></i>
                        হোম
                    </a>
                </li>
                <li class="nav-item">
                    <a href="all-course.html" class="nav-item-link">
                        <i class="fab fa-discourse"></i>
                        কোর্স সমূহ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-item-link">
                        <i class="fas fa-video"></i>
                        লাইভ ব্যাচ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-item-link">
                        <i class="fas fa-fire"></i>
                        অফার
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-item-link login-logout">
                        লগ ইন / সাইন আপ
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /Header -->

    <main>
        <!-- Home -->
        <section class="home-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="home-sec-left-side-wrap">
                            <h1 class="title">
                                বেকারত্ব কে না বলুন দক্ষতা অর্জন করে ফ্রিল্যান্সিং এ ক্যারিয়ার গড়ুন!
                            </h1>
                            <p class="sub-title">
                                TBS একাডেমি আপনাকে সঠিক কাজের দক্ষতা অর্জন করতে ও সফল ক্যারিয়ার গঠনে সহয়তা করে - সেটা এখন এবং ভবিষ্যতে।
                            </p>
                            <div class="home-sec-left-link-outer">
                                <a href="#" class="course-link">কোর্সগুলো দেখুন</a>
                                <a href="#" class="login-link">লগ ইন / সাইন আপ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-sec-right-side-wrap">
                            <img :src="'frontend/images/home-banner.png'">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Home -->

        <!-- About Us -->
        <section class="about-us-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        কেন <span class="separate-color">আমরা </span> সেরা
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Module.png'" class="image">
                            <h4 class="title">
                                আপডেটেড কোর্স মডিউল
                            </h4>
                            <p class="text">
                                সময়োপযোগী এবং আন্তর্জাতিক কারিকুলাম অনুসরণ করে প্রতিটি কোর্সের মডিউল তৈরি করা হয়েছে।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Practice.png'" class="image">
                            <h4 class="title">
                                সুবিধামত অনুশীলন
                            </h4>
                            <p class="text">
                                কোর্স গুলো আপনি আপনার সুবিধামত সময়ে আমাদের ওয়েবসাইট থেকে দেখতে পারবেন।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Support.png'" class="image">
                            <h4 class="title">
                                কোর্স সাপোর্ট
                            </h4>
                            <p class="text">
                                কোর্সে জয়েন করার পর কোন লেসন বুঝতে সমস্যা হলে ২৪X৭ সাপোর্ট বিদ্যমান।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Live.png'" class="image">
                            <h4 class="title">
                                লাইভ ক্লাস
                            </h4>
                            <p class="text">
                                কোর্সের লেসন এর উপর ভিত্তি করে যেকোনো সময় লাইভ ক্লাস করানো হয়।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Resources.png'" class="image">
                            <h4 class="title">
                                পর্যাপ্ত রিসোর্স সরবরাহ
                            </h4>
                            <p class="text">
                                প্রতিটি কোর্সের এর সাথে কোর্স এবং লেসন সম্পর্কিত রিসোর্স প্রদান করা হয়।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item-wrap">
                            <img :src="'frontend/images/about-icon/Certificate.png'" class="image">
                            <h4 class="title">
                                সার্টিফিকেশন
                            </h4>
                            <p class="text">
                                প্রতিটি কোর্স শেষে কুইকটিম একাডেমি এর পক্ষ থেকে সার্টিফিকেট প্রদান করা হয়।
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
                    <div class="col-md-4">
                        <div class="course-item-wrap">
                            <a href="course-details.html" class="course-item-image-outer">
                                <img :src="'frontend/images/course/course1.jpg'">
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
                                <img :src="'frontend/images/course/course2.jpg'">
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
                                <img :src="'frontend/images/course/course3.jpg'">
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

        <!-- Course -->
        <section class="course-section" style="background: #EFF2F6;">
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
                                <img :src="'frontend/images/course/course1.jpg'">
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
                                <img :src="'frontend/images/course/course2.jpg'">
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
                                <img :src="'frontend/images/course/course3.jpg'">
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

        <!-- Course -->
        <section class="course-section">
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
                                <img :src="'frontend/images/course/course1.jpg'">
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
                                <img :src="'frontend/images/course/course2.jpg'">
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
                                <img :src="'frontend/images/course/course3.jpg'">
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

        <!-- Course -->
        <section class="course-section">
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
                                <img :src="'frontend/images/course/course1.jpg'">
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
                                <img :src="'frontend/images/course/course2.jpg'">
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
                                <img :src="'frontend/images/course/course3.jpg'">
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

        <!-- Achievement -->
        <section class="our-achievment-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">
                        আমাদের <span class="separate-color">অর্জন</span> সমূহ
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                10000 <span>+</span>
                            </h4>
                            <h6 class="name">
                                নিবন্ধিত শিক্ষার্থী
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                10
                            </h4>
                            <h6 class="name">
                                ট্রেইনার
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="achiement-item-wrap">
                            <h4 class="count-number">
                                15
                            </h4>
                            <h6 class="name">
                                মোট কোর্স
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3">
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
    </main>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-item-outer">
                        <h4 class="title">
                            যোগাযোগ করুন
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="tel:+8801797950360">
                                    <i class="fas fa-phone-alt"></i>
                                    +880 1797 950 360
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="tel:+8801828165194">
                                    <i class="fas fa-phone-alt"></i>
                                    +880 1828 165 194
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="mailto:support@quickteamacademy.com">
                                    <i class="fas fa-envelope"></i>
                                    support@quickteamacademy.com
                                </a>
                            </li>
                        </ul>
                        <ul class="footer-social-links">
                            <li class="footer-social-link-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="footer-social-link-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="footer-social-link-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="footer-social-link-item">
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-item-outer">
                        <h4 class="title">
                            অন্যান্য
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    আমাদের সম্পর্কে
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    যোগাযোগ করুন
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    প্রশ্নাবলী
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-item-outer">
                        <h4 class="title">
                            নীতিমালা
                        </h4>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    Terms & Condition
                                </a>
                            </li>
                            <li class="footer-list-item">
                                <a class="footer-list-item-link" href="#">
                                    Certificate Verification
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer-item-outer">
                        <h4 class="title">
                            অফারের জন্য সাবস্ক্রাইব করুন
                        </h4>
                        <form action="" method="" class="subcribe-form form-group">
                            <input type="email" name="subcribe" class="form-control" placeholder="ইমেইল অ্যাড্রেস">
                            <button class="subcriber-btn">সাবস্ক্রাইব</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-outer">
                <p class="copyright-text">
                    © <a href="https://eurekabd-it.com" target="_blank">Eurekabd-it </a> All Right Reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
</template>

<style>

</style>
