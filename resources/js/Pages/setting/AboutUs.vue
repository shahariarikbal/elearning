<template>
    <div>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">About Us</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    About
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
                            About US
                        </h4>
                        <p class="content-text">
                            Pixency-it is all about connecting & discovering talents, inspiring people and impact lives with the best teaching and earning opportunities.
                            “Pixency-it” is an online teaching marketplace, where instructors can create and upload their knowledge & make money online.
                            It is also an E-Learning Platform to learn anything from anywhere from the best & Top rated Professionals and Freelancers! It has created earning opportunities for millions of instructors!
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
