<template>
    <div>
        <Layout />
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
                                <a href="#">{{ contact.phone }}</a>
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
                                <a href="#">{{ contact.email }}</a>
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
                                    {{ contact.address }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-md-8 m-auto">
                                <form @submit.prevent="contactStore" method="post" class="contact-form form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name">
                                                Name
                                            </label>
                                            <input type="text" name="name" v-model="form.name" class="form-control" placeholder="Enter your name">

                                            <div
                                                v-if="form.errors.name"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.name }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone">
                                                Phone
                                            </label>
                                            <input type="text" name="phone" v-model="form.phone" class="form-control" placeholder="Enter phone number">

                                            <div
                                                v-if="form.errors.phone"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.phone }}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email">
                                                Email
                                            </label>
                                            <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Enter your email">

                                            <div
                                                v-if="form.errors.email"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.email }}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="message">
                                                Message
                                            </label>
                                            <textarea name="message" rows="5" v-model="form.message" class="form-control" placeholder="Your Message"></textarea>

                                            <div
                                                v-if="form.errors.message"
                                                class="text-sm text-red-600"
                                            >
                                                {{ form.errors.message }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn-outer">
                                        <button class="contact-submit-btn-inner" type="submit" :disabled="form.processing" :class="{ 'opacity-25': form.processing }">
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

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
import { useForm } from "@inertiajs/vue3";
const props = defineProps({
    contact: {
        type: Object,
        default: () => ({})
    }
});

const form = useForm({
    name: "",
    email: "",
    phone: "",
    message: "",
});

const contactStore = () => {
    form.post(route("contact.store"));
    window.location.href = '/'
};
</script>

<style scoped>

</style>
