<template>
    <div>
        <layout/>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Blog Details</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Details
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Blog Details -->
            <section class="blog-details-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-details-wrapper">
                                <div class="blog-details-image">
                                <img :src="'/blog/' + blog.image" alt="blog image">
                                </div>
                                <div class="blog-details-contant">
                                    <h5 class="blog-item-name">{{ blog.title }}</h5>
                                    <p class="text">
                                        {{ blog.long_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="recent-blog-wrapper">
                                <div class="recent-blog-title-inner">
                                    <h3 class="title">
                                        Recent Blog
                                    </h3>
                                </div>
                                <div class="recent-blog-outer" v-for="blog in blogs">
                                    <div class="recent-blog-image-inner">
                                        <a href="#" class="recent-blog-image">
                                            <img :src="'/blog/' + blog.image" class="recent-blog-img" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="recent-blog-content">
                                        <h4 class="recent-blog-content-title">
                                            <a :href="'/blog/details/' + blog.id + '/' + blog.slug" class="recent-blog-title">
                                                {{ blog.title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Blog Details -->
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
    blog: {
        type: Object,
        default: () => ({})
    },
    blogs: {
        type: Object,
        default: () => ({})
    }
});
</script>

<style scoped>

</style>
