@extends('layouts.front.master')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
        Main content START -->
        <section class="position-relative pt-0">

            <div class="container">

                <div class="row">
                    <div class="col-12 my-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i> خانه</a></li>
                                <li class="breadcrumb-item active">شبکه ای نسخه 4</li>
                            </ol>
                        </nav>

                    </div>
                    <div class="col-12">
                        <h2 class="mt-3 mb-4">  آرشیو اخبار : <span class="bg-success px-4 py-1 rounded text-white fs-5">تکنولوژی </span></h2>
                    </div>

                    <!-- Main Post START -->
                    <div class="col-12">
                        <div class="row gy-4">
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/14.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی ضدانقلاب شده!</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">22 آذر، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/15.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
                                                    گردشگری</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">رازهای کوچک کثیف در مورد صنعت تجارت</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">7 دی، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/16.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اقتصاد</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">عادات بدی که افراد در صنعت باید آنها را ترک کنند!</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">17 تیر، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/13.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>ورزش</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">سال 2022 رویایی و فوق العاده برای طارمی</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">29 مرداد، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/12.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white bg-opacity-10 bg-blur text-white rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">رونمایی از طرح بزرگترین تلسکوپ نوری آسیا</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">11 دی، 1410</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card" @style("box-shadow: 0 5px 20px 0 rgba(69, 67, 96, 0.1);padding: 16px")>
                                    <!-- Card img -->
                                    <div class="card-fold position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/11.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>رسانه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">طرح مجلس برای گرفتن مالیات از سفته بازها</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...p>
                                            <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">1 خرداد، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Load more START -->
                            <div class="col-12 text-center mt-5">
                                <button type="button" class="btn btn-primary-soft">مقالات بیشتر <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                            </div>
                            <!-- Load more END -->
                        </div>

                    </div>
                    <!-- Main Post END -->
                </div> <!-- Row end -->
            </div>
        </section>
        <!-- =======================
        Main content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
