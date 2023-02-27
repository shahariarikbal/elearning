<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <header class="header-section">
            <nav class="nav-items-wrapper">
                <a href="#" class="navbar-brand">
                    <img class="brand" src="{{ asset('/frontend/images/logo.png') }}" alt="Logo">
                </a>
                <div class="nav-toggle-btn">
                    <div class="btn-inner"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-item-link active">
                            <i class="fas fa-home"></i>
                            হোম
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="all-course.html" class="nav-item-link">
                            <i class="fab fa-discourse"></i>
                            কোর্স সমূহ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fas fa-video"></i>
                            লাইভ ব্যাচ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fas fa-fire"></i>
                            অফার
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-item-link login-logout">
                            লগ ইন / সাইন আপ
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!----Inertia---->
        @inertia
        <!----Inertia---->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                যোগাযোগ করুন
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="tel:+8801797950360">
                                        <i class="fas fa-phone-alt"></i>
                                        +880 1797 950 360
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="tel:+8801828165194">
                                        <i class="fas fa-phone-alt"></i>
                                        +880 1828 165 194
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="mailto:support@quickteamacademy.com">
                                        <i class="fas fa-envelope"></i>
                                        support@quickteamacademy.com
                                    </a>
                                </li>
                            </ul>
                            <ul class="footer-social-links">
                                <li class="footer-social-link-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="footer-social-link-item">
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                অন্যান্য
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        আমাদের সম্পর্কে
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        যোগাযোগ করুন
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        প্রশ্নাবলী
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="footer-item-outer">
                            <h4 class="title">
                                নীতিমালা
                            </h4>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        Terms & Condition
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a class="footer-list-item-link" href="#">
                                        Certificate Verification
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
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
                        © <a href="https://eurekabd-it.com" target="_blank">Eurekabd-it </a> All Right Reserved.
                    </p>
                </div>
            </div>
        </footer>
        <!-- Jquery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Boostarap CDN -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- Slick Slider CDN -->
    </body>
</html>
