<template>
    <div>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Contact</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Contact -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h5 class="title">
                                    Phone
                                </h5>
                                <a href="tel:+65-98112405">+65-98112405</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h5 class="title">
                                    Email
                                </h5>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h5 class="title">
                                    Address
                                </h5>
                                <p>
                                    30 Roberts Lane, #02-01 Singapore cdgdf fdgdsr 218309, Singapore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                <form action="" method="" class="contact-form form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name">
                                                Name
                                            </label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone">
                                                Phone
                                            </label>
                                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email">
                                                Email
                                            </label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="message">
                                                Message
                                            </label>
                                            <textarea name="message" rows="5" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn-outer">
                                        <button class="contact-submit-btn-inner">
                                            Send Message <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Contact -->
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
