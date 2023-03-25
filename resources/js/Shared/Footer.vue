<template>
    <div>
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-item-outer">
                            <NavLink href="/" class="navbar-brand-footer">
                                <img class="brand" :src="'/setting/' + $page.props.setting.allSetting.logo" alt="Logo">
                            </NavLink>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" :href="'tel:'+$page.props.setting.allSetting.phone">
                                        <i class="fas fa-map-marker-alt"></i>
                                        1189-93 Soi 71 Sukhumvit Klong Ton Khlong Toei dsfgdfhgf  hyfrht
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" :href="'tel:'+$page.props.setting.allSetting.phone">
                                        <i class="fas fa-phone-alt"></i>
                                        {{ $page.props.setting.allSetting.phone }}
                                    </a>
                                </li>
                                <!-- <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="tel:+8801828165194">
                                        <i class="fas fa-phone-alt"></i>
                                        +880 1828 165 194
                                    </a>
                                </li> -->
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" :href="'mailto:'+$page.props.setting.allSetting.email">
                                        <i class="fas fa-envelope"></i>
                                        {{ $page.props.setting.allSetting.email }}
                                    </a>
                                </li>
                            </ul>
                            <ul class="footer-social-links">
                                <li class="footer-social-link-item">
                                    <a :href="$page.props.setting.allSetting.facebook" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a :href="$page.props.setting.allSetting.twitter" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a :href="$page.props.setting.allSetting.instagram" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a :href="$page.props.setting.allSetting.youtube" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                অন্যান্য
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="/about-us">
                                        আমাদের সম্পর্কে
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a href="/contact" class="footer-list-item-link">
                                        যোগাযোগ করুন
                                    </a>
                                </li>
                                <!-- <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        প্রশ্নাবলী
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                নীতিমালা
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="/privacy/policy">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="/terms/conditions">
                                        Terms & Condition
                                    </a>
                                </li>
                                <!-- <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        Certificate Verification
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                অফারের জন্য সাবস্ক্রাইব করুন
                            </h4>
                            <form action="" method="" class="subcribe-form form-group">
                                <input type="email" name="subcribe" class="form-control" placeholder="ইমেইল অ্যাড্রেস">
                                <button class="subcriber-btn">সাবস্ক্রাইব</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-outer">
                    <p class="copyright-text">
                        © Pixency-IT All Right Reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
