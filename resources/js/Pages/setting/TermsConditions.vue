<template>
    <div>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">TERMS & CONDITIONS</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Policies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- About -->
            <section class="terms-condition-section">
                <div class="container">
                    <div class="terms-condition-content-wrapper">
                        <h4 class="content-title">
                            <i class="far fa-hand-point-right"></i>
                            শর্তাবলী:
                        </h4>
                        <p class="content-text">
                            পিক্সেন্সি আইটির সকল লিখিত “নিয়ম ও শর্তাবলী” এবং “গোপনীয়তা নীতি“ এর সাথে সম্মত হয়ে, আপনি আমাদের ওয়েবসাইট, পরিষেবা, সম্পত্তি ব্যবহার করতে বা পিক্সেন্সি শর্তাবলী:
                            পিক্সেন্সি আইটির সকল লিখিত “নিয়ম ও শর্তাবলী” এবং “গোপনীয়তা নীতি“ এর সাথে সম্মত হয়ে, আপনি আমাদের ওয়েবসাইট, পরিষেবা, সম্পত্তি ব্যবহার করতে বা পিক্সেন্সি আইটির থেকে কোর্স কেনার জন্য আপনার সম্মতি দিচ্ছেন।
                        </p>
                        <h4 class="content-title">
                            <i class="far fa-hand-point-right"></i>
                            পরিবর্তন এবং আপডেট:
                        </h4>
                        <p class="content-text">
                            আমাদের কাছে একটি উত্তরাধিকার, কর্তৃত্ব এবং প্রশিক্ষকের শর্তাবলী এবং গোপনীয়তা নীতি পরিবর্তন, সংশোধন বা আপডেট করার অধিকার রয়েছে, বিজ্ঞপ্তি সহ বা ছাড়াই। আমাদের সাথে থাকুন এবং প্রশিক্ষক আমাদের শর্তাবলী, নিয়ম বজায় রাখতে এবং আপনার ব্যক্তিগত ডেটার নিরাপত্তা বজায় রাখতে প্রতিশ্রুতিবদ্ধ।

                            আপনি যদি আমাদের শর্তাবলীতে সম্মত না হন তবে আমাদের পরিষেবা এবং ওয়েবসাইট ব্যবহার না করার জন্য আপনাকে অনুরোধ করা হচ্ছে।

                            তাছাড়া আপনি যদি কোন তথ্য পাইরেসি অথবা কোন কোর্স এর ভিডিও বাহিরে রি-সেল অথবা শেয়ার করে থাকেন এবং পিক্সেন্সি আইটির যে কোনো সম্মান ক্ষুন্ন অথবা গোপনীয়তার নীতি লংঘন করে এমন তথ্য শেয়ার করে থাকেন কোম্পানি এক্ষেত্রে আইন অনুযায়ী ব্যবস্থা নিতে বাধ্য থাকবে।
                        </p>
                        <h4 class="content-title">
                            <i class="far fa-hand-point-right"></i>
                            PAYMENT & REFUND POLICY
                        </h4>
                        <p class="content-text">
                            কোন শিক্ষার্থী যদি ভর্তি হওয়ার পর ক্লাস শুরুর পূর্বে উপযুক্ত কারনে ভর্তি বাতিল করতে চায় তবে বাতিল করতে পারবে। তবে অবশ্যই ভর্তি বাতিলের উপযুক্ত কারন দর্শাতে হবে এবং ভর্তি বাতিল বাবদ ৬0% কোর্স ফি কর্তন করা হবে আর বাকি ৪০% ফি ছাত্র/ছাত্রী ফেরত পাবে। আর ক্লাস শুরুর পর যদি কোন শিক্ষার্থী ভর্তি বাতিল করতে চায় তবে তার ভর্তি হওয়ার সময় প্রদানকৃত অর্থ ফেরত অযোগ্য বলে গণ্য হবে। আপনার যদি আরও প্রশ্ন থাকে আমাদের সাথে যোগাযোগ করুন: ☎️01402571451
                        </p>
                    </div>
                </div>
            </section>
            <!-- /About -->
        </main>
        <Footer />
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
