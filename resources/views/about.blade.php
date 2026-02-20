@extends('layouts.app')

@section('title', 'About Me')

@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}">
@endpush

@section('content')

    <!-- Header Logo -->
    <div class="header-logo py-5 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid w-100">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Overlay -->
    <div class="search-wrap">
        <div class="overlay">
            <form action="#" class="search-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-9">
                            <input type="text" class="form-control" placeholder="Search..." />
                        </div>
                        <div class="col-md-2 col-3 text-right">
                            <div class="search_toggle toggle-wrap d-inline-block">
                                <i class="ti-close"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">About Me</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="pt-5 padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="col-lg-12">
                            <img src="{{ asset('images/about.jpg') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- Who Am I -->
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">Who Am I?</h5>
                                    <p>
                                        أنا مطور Backend شغوف بعالم البرمجة والتقنية. بشتغل بشكل يومي مع PHP وLaravel
                                        وببني APIs قوية وقواعد بيانات محسنة. بأمن بالكود النظيف والـ Clean Architecture،
                                        ودايماً بدور على تحديات جديدة تطور مهاراتي.
                                    </p>
                                    <p>
                                        بره الشغل، الكورة هي حياتي! مش بفوت ماتش للأهلي، وقضيت سنين في الملاعب
                                        من أيام ما كنت لاعب ناشئ لحد ما البرمجة خدتني لعالم تاني.
                                    </p>
                                </div>

                                <!-- My Vision -->
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">My Vision</h5>
                                    <p>
                                        هدفي إني أبني حلول تقنية حقيقية تفرق في حياة الناس. مش بس كود شغال،
                                        لكن منتج سريع، آمن، وسهل الاستخدام. بأمن إن الـ Backend هو العمود الفقري
                                        لأي تطبيق ناجح.
                                    </p>
                                    <p>
                                        بحلم أوصل لفريق كبير أقود فيه مشاريع معقدة، وأشارك خبرتي مع المبرمجين
                                        الجداد. والأهم: أوازن بين الشغل والكورة والحياة!
                                    </p>
                                </div>

                                <!-- Follow Me -->
                                <div class="col-lg-4">
                                    <h5 class="text-uppercase letter-spacing mb-4">Follow Me:</h5>
                                    <div class="follow-socials">
                                        <a href="https://github.com/yourusername" class="github" target="_blank">
                                            <i class="ti-github"></i>
                                        </a>
                                        <a href="https://linkedin.com/in/yourusername" class="linkedin" target="_blank">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                        <a href="https://twitter.com/yourusername" class="twt" target="_blank">
                                            <i class="ti-twitter"></i>
                                        </a>
                                        <a href="#" class="inst"><i class="ti-instagram"></i></a>
                                    </div>
                                    <p class="mt-3">
                                        <strong>Email:</strong> dev@example.com<br>
                                        <strong>Location:</strong> Cairo, Egypt
                                    </p>
                                </div>
                            </div>

                            <!-- Skills & Interests -->
                            <h3 class="mb-3 mt-5">Tech Stack & Passion</h3>
                            <p class="mb-4">
                                بشتغل يومياً مع <strong>PHP, Laravel, MySQL, Redis, Docker</strong>.
                                بفهم في الـ Server Administration وبيشتغل على تحسين أداء التطبيقات.
                                وبردو بتابع الكورة بشغف: تحليل تكتيكي، إحصائيات، ومش بفوت مباراة للريال أو الأهلي!
                            </p>

                            <!-- What I Love -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0 text-center">
                                        <img src="{{ asset('images/news/news-1.jpg') }}" alt="Coding"
                                            class="img-fluid rounded">
                                        <h4 class="mt-3">Clean Code</h4>
                                        <p class="small">كود نظيف ومنظم</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0 text-center">
                                        <img src="{{ asset('images/news/news-2.jpg') }}" alt="Football"
                                            class="img-fluid rounded">
                                        <h4 class="mt-3">Football</h4>
                                        <p class="small">الكورة هي الحياة</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0 text-center">
                                        <img src="{{ asset('images/news/news-3.jpg') }}" alt="Learning"
                                            class="img-fluid rounded">
                                        <h4 class="mt-3">Learning</h4>
                                        <p class="small">تعلم تقنيات جديدة</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="about-widget mb-4 mb-lg-0 text-center">
                                        <img src="{{ asset('images/news/news-4.jpg') }}" alt="Team Work"
                                            class="img-fluid rounded">
                                        <h4 class="mt-3">Team Work</h4>
                                        <p class="small">العمل الجماعي</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section bg-grey">
        <div class="instagram-photo-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Follow on Instagram</h4>
                    </div>
                </div>
                <div class="row no-gutters" id="instafeed"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mb-4">
                        <h2 class="footer-logo">Revolve.</h2>
                    </div>
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i>Pinterest</a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ti-github mr-2"></i>Github</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i>Instagram</a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
                    </ul>
                </div>

                <div class="col-md-12 text-center">
                    <p class="copyright">© Copyright {{ date('Y') }} - Revolve. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

@endsection

@push('scripts')
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('plugins/instafeed-js/instafeed.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
