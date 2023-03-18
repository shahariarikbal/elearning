<template>
    <div>
        <Layout />
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Student Login</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Login -->
            <section class="login-section">
                <div class="container">
                    <div class="login-form-wrapper">
                        <form @submit.prevent="submit" class="login-form form-group">
                            <div class="title">Student Login</div>
                            <div class="input-field-wrapper">
                                <span class="fas fa-user"></span>
                                <input type="email" class="form-control" v-model="form.email" name="email" placeholder="Email">
                            </div>
                            <div class="input-field-wrapper">
                                <span class="fas fa-lock"></span>
                                <input type="password" class="form-control" v-model="form.password" name="password" id="password" placeholder="Password">
                                <i id="icon" class="fas fa-eye"></i>
                            </div>
                            <a href="#" class="reset-password-link">Reset Password ?</a>
                            <div class="submit-btn-outer">
                                <button type="submit" class="submit-btn-inner">
                                    Sign in
                                </button>
                            </div>
                            <NavLink href="/user/register" class="sign-up-link">Sign Up</NavLink>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /Login -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
});

const submit = () => {
    form.post(route('user.login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<style scoped>

</style>
