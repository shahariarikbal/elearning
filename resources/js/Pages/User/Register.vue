<template>

    <div>
        <Head title="User Register" />
        <Layout />
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
                        <form @submit.prevent="submit" method="post" class="registration-form form-group" enctype="multipart/form-data">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" v-if="$page.props.flash.message">
                                <strong>Success!</strong> {{ $page.props.flash.message }}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="title">Student Registration</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control" name="first_name" v-model="form.first_name" placeholder="First Name">
                                    </div>
                                    <div
                                        v-if="form.errors.first_name"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.first_name }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-user"></span>
                                        <input type="text" class="form-control" name="last_name" v-model="form.last_name" placeholder="Last Name">
                                    </div>
                                    <div
                                        v-if="form.errors.last_name"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.last_name }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-envelope"></span>
                                        <input type="email" class="form-control" name="email" v-model="form.email" placeholder="Email">
                                    </div>
                                    <div
                                        v-if="form.errors.email"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.email }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-phone-alt"></span>
                                        <input type="text" name="phone" v-model="form.phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div
                                        v-if="form.errors.phone"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.phone }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" class="form-control" v-model="form.password" name="password" placeholder="Password">
                                        <i id="icon" class="fas fa-eye"></i>
                                    </div>
                                    <div
                                        v-if="form.errors.password"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.password }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" class="form-control" name="password_confirmation" v-model="form.password_confirmation" placeholder="Confirm Password">
                                        <i id="icon" class="fas fa-eye"></i>
                                    </div>
                                    <div
                                        v-if="form.errors.password_confirmation"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.password_confirmation }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field-wrapper">
                                        <span class="fas fa-camera"></span>
                                        <input type="file" name="avatar" class="form-control" accept="image/*"
                                               @input="form.avatar = $event.target.files[0]"
                                        />
                                    </div>
                                    <div
                                        v-if="form.errors.avatar"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.avatar }}
                                    </div>
                                </div>
                            </div>
                            <p style="font-size:13px;font-weight: 600;color: red;">Use image sort-name and Minimum file size of 100 KB</p>
                            <div class="submit-btn-outer">
                                <button type="submit" class="submit-btn-inner" :disabled="form.processing" :class="{ 'opacity-25': form.processing }">
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
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import { Head } from '@inertiajs/vue3';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
import {useForm} from "@inertiajs/vue3";
const props = defineProps({
    id: {
        type: Object,
        default: () => ({})
    }
});
const form = useForm({
    first_name: "",
    last_name: "",
    email: "",
    phone: "",
    avatar: "",
    password: "",
    password_confirmation: "",
    course_id: props.id,
});

const submit = () => {
    form.post(route("store.user"), {
        forceFormData: true,
        onSuccess: () => form.reset(),
    });
};
</script>

<style scoped>

</style>
