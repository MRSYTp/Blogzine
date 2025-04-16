<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
 <title>Blogzine - قالب HTML مجله خبری و وبلاگ</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Blogzine">
    <meta name="description" content="قالب وبلاگ و مجله خبری مبتنی بر بوت استرپ">
    <!-- Dark mode -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{Vite::image('favicon.ico')}}">
    @vite(['resources/assets/css/app.css', 'resources/assets/js/app.js'])
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("registerForm").submit();
        }
    </script>
    <style>
        .swiper {
            width: 100%;
            /* height: 400px; */
        }
    </style>
</head>

<body id="main">
<div class="pull-to-refresh">
    <div class="spiner-border"></div>
</div>
<!-- Preloader START -->
<!-- <div class="preloader">
    <div class="loader">
        <div class="sh1"></div>
        <div class="sh2"></div>
    </div>
</div> -->
<!-- Preloader END -->
<!-- Slider main container -->
