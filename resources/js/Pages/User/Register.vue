<template>

    <div>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Student Registration</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <NavLink href="/user/register">
                                    Registration
                                </NavLink>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Registration -->
            <section class="login-section">
                <div class="container">
                    <div class="login-form-wrapper">
                        <form action="" method="" class="registration-form form-group">
                            <div class="title">Student Registration</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control" name="first_name" value="" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control" name="last_name" value="" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-envelope"></span>
                                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-phone-alt"></span>
                                        <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" class="form-control " name="password" placeholder="Password">
                                        <i id="icon" class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" class="form-control " name="password_confirmation" placeholder="Confirm Password">
                                        <i id="icon" class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-camera"></span>
                                        <input type="file" name="avatar" class="form-control" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <p style="font-size:13px;font-weight: 600;color: red;">Use image sort-name and Minimum file size of 100 KB</p>
                            <div class="submit-btn-outer">
                                <button type="submit" class="submit-btn-inner">
                                    Sign up
                                </button>
                            </div>
                            <NavLink href="/user/login" class="sign-up-link">Sign In</NavLink>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /Registration -->
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
