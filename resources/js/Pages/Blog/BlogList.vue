<template>
    <div>
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
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <NavLink href="/blog/details" class="blog-item-outer">
                                <img src="https://mdjamalmia.com/blog/blog_63fc9b6ee08f98.312787221677499246.jpeg" class="blog-item-image">
                                <h5 class="blog-item-name">Digital Marketing</h5>
                                <p class="blog-item-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
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
