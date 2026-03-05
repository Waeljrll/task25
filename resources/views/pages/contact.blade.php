@extends('layouts.app')

@section('title', 'Contact')

@push('styles')
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}">
@endpush

@section('content')

    <!-- Header Logo -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">Contact</h2>
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
                            <img src="{{ asset('images/contact.jpg') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <p class="mt-5 mb-5">Something splashing about in the pool a little way off, and she swam nearer
                                to make out what it was: at first she thought it must be a walrus or hippopotamus, but then
                                she remembered how small she was now, and she soon made out that it was only a mouse that
                                had slipped in like herself.</p>

                            <h2 class="mb-4">Get In Touch</h2>

                            <form id="contact-form" class="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Your Name (required)</label>
                                            <input class="form-control form-control-name" name="name" id="name"
                                                type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Your Email (required)</label>
                                            <input class="form-control form-control-email" name="email" id="email"
                                                type="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Your Message</label>
                                            <textarea class="form-control form-control-message" name="message" id="message" rows="7" required></textarea>
                                        </div>

                                        <button class="btn btn-primary solid blank mt-3" type="submit">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->


@endsection

@push('scripts')
    <!-- Owl caeousel -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('plugins/instafeed-js/instafeed.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush

