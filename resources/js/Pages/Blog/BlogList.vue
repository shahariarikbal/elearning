<template>
    <div>
        <layout/>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Blog</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Blog -->
            <section class="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12" v-for="blogList in blogs" :key="blogList.id">
                            <NavLink :href="'/blog/details/' + blogList.id + '/' + blogList.slug" class="blog-item-outer">
                                <img :src="'/blog/' + blogList.image" class="blog-item-image" alt="blog image">
                                <h5 class="blog-item-name">{{ blogList.title }}</h5>
                                <p class="blog-item-text">
                                    {{ blogList.short_description }}
                                </p>
                            </NavLink>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Blog -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
const props = defineProps({
    blogs: {
        type: Object,
        default: () => ({})
    }
});
</script>

<style scoped>

</style>
