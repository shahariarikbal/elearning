<template>
    <div>
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
                        <form action="" method="" class="login-form form-group">
                            <div class="title">Student Login</div>
                            <div class="input-field-wrapper">
                                <span class="fas fa-user"></span>
                                <input type="email" class="form-control " name="email" placeholder="Email">
                            </div>
                            <div class="input-field-wrapper">
                                <span class="fas fa-lock"></span>
                                <input type="password" class="form-control " name="password" id="password" placeholder="Password">
                                <i id="icon" class="fas fa-eye"></i>
                            </div>
                            <a href="#" class="reset-password-link">Reset Password ?</a>
                            <div class="submit-btn-outer">
                                <button type="submit" class="submit-btn-inner">
                                    Sign in
                                </button>
                            </div>
                            <a href="registration.html" class="sign-up-link">Sign Up</a>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /Login -->
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
