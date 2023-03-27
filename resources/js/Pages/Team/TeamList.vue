<template>
    <div>
        <Layout/>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Team</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Team
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- Team -->
            <section class="team-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6" v-for="member in teams">
                            <div class="list-item-wrapper">
                                <div class="item-image-outer">
                                    <img :src="'/team/' + member.avatar" />
                                    <div class="list-social-icon-outer">
                                        <ul class="social-icon-list">
                                            <li class="social-icon-list-item">
                                                <a href="#" class="social-icon-list-item-link"> <i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li class="social-icon-list-item">
                                                <a href="#" class="social-icon-list-item-link"> <i class="fab fa-linkedin-in"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-content-outer">
                                    <h4 class="list-item-name">{{ member.name }}</h4>
                                    <span class="list-item-position"> {{ member.designation }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Team -->
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import Footer from '../../Shared/Footer.vue';
import NavLink from '../../Shared/NavLink.vue';
const props = defineProps({
    teams: {
        type: Object,
        default: () => ({})
    }
});
</script>

<style scoped>

</style>
