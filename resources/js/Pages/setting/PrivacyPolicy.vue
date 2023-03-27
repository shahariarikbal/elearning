<template>
    <div>
        <main>
            <!-- Banner -->
            <section class="banner-section" :style="{ 'background-image': 'url('+ '/frontend/images/banner.jpg' + ')' }">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner-title">Privacy Policy</h1>
                        <ul class="banner-item">
                            <li>
                                <NavLink href="/">
                                    <i class="fas fa-home"></i>
                                    Home
                                </NavLink>
                            </li>
                            <li class="active">
                                <a href="#">
                                    Policies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Banner -->

            <!-- About -->
            <section class="terms-condition-section">
                <div class="container">
                    <div class="terms-condition-content-wrapper">
                        <h4 class="content-title">
                            <i class="far fa-hand-point-right"></i>
                            Privacy &amp; Policy
                        </h4>
                        <p class="content-text">
                            Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy. Before or at the time of collecting personal information, we will identify the purposes for which information is being collected. We will only retain personal information as long as necessary for the fulfillment of those purposes. We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use, or modification. We will make readily available to customers information about our policies and practices relating to the management of personal information. The central part is that We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained
                        </p>
                    </div>
                </div>
            </section>
            <!-- /About -->
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
