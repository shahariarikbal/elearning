<template>
    <div>
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
                                <img src="https://mdjamalmia.com/blog/blog_63fc9b6ee08f98.312787221677499246.jpeg">
                                </div>
                                <div class="blog-details-contant">
                                    <h5 class="blog-item-name">Digital Marketing</h5>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                <div class="recent-blog-outer">
                                    <div class="recent-blog-image-inner">
                                        <a href="#" class="recent-blog-image">
                                            <img src="https://mdjamalmia.com/blog/blog_63fc9b6ee08f98.312787221677499246.jpeg" class="recent-blog-img">
                                        </a>
                                    </div>
                                    <div class="recent-blog-content">
                                        <h4 class="recent-blog-content-title">
                                            <a href="#" class="recent-blog-title">
                                                Digital Marketing
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
