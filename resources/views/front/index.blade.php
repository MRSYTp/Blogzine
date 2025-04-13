
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<title>Blogzine - قالب HTML مجله خبری و وبلاگ</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Blogzine">
	<meta name="description" content="قالب وبلاگ و مجله خبری مبتنی بر بوت استرپ">

    
    @vite(['resources/assets/css/app.css', 'resources/assets/js/app.js'])
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ \Illuminate\Support\Facades\Vite::image('favicon.ioc') }}">

	<!-- Plugins CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    

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



<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end  border-light" tabindex="-1" id="offcanvasMenu">
	<div class="offcanvas-header justify-content-end">
		<button type="button" onclick="closedSidebar()" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body d-flex flex-column pt-0">
		<div>
			<img class="light-mode-item my-3" src="{{ \Illuminate\Support\Facades\Vite::image('logo.svg') }}" alt="logo">
			<img class="dark-mode-item my-3" src="{{ \Illuminate\Support\Facades\Vite::image('logo-light.svg') }}" alt="logo">
			<p style="line-height: 2;">موضوع وبلاگ، اخبار و مجله نسل بعدی برای شما برای شروع به اشتراک گذاری داستان های خود از امروز! </p>
			<!-- Nav START -->
			<!-- <ul class="nav d-block flex-column my-4">
				<li class="nav-item h5">
					<a class="nav-link" href="index.html">ورود</a>
				<li class="nav-item h5">
					<a class="nav-link" href="about-us.html">ثبت نام</a>
				</li>
			</ul> -->
			<!-- Nav END -->
			 <p class="text-center">پروفایل</p>
			 <div class="d-flex flex-column justify-content-center align-items-center">
				<img class="offcanvas-avatar avatar-img p-1 mb-2"  src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="">
				<p class="fw-bold" style="font-size: 17px;">وحید صالحی</p>
<ul class="nav d-flex flex-row-reverse justify-content-around">
<li class="nav-item offcanvas-social-icon d-flex justify-content-center align-items-center ms-3 bg-light"><a class="nav-link d-flex" href="#"><i class="fab fa-telegram fa-fw"
style="font-size: 22px;"></i></a></li>
<li class="nav-item offcanvas-social-icon d-flex justify-content-center align-items-center ms-3 bg-light"><a class="nav-link d-flex" href="#"><i class="fab fa-instagram fa-fw"
style="font-size: 22px;"></i></a>
</li>
<li class="nav-item offcanvas-social-icon d-flex justify-content-center align-items-center ms-3 bg-light"><a class="nav-link d-flex" href="#"><i class="fab fa-linkedin fa-fw"
style="font-size: 22px;"></i></a></li>
</ul>
			 </div>
			<div class="my-4">
				<ul class="nav d-flex flex-column offcanvas-dash-nav">
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas‌Profile">پروفایل</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas‌Bookmark">علاقه مندی ها</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="">همه مقالات</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="dashboard.html">داشبورد</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="">افزودن مقاله</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="">ویرایش مقالات</a></li>
					<li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="">مدیریت دیدگاه ها</a></li>
				</ul>
				</div>
		</div>
	</div>
</div>

<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<div class="navbar-top d-none d-lg-block small">
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="{{ \Illuminate\Support\Facades\Vite::image('logo-light.svg') }}" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="{{ \Illuminate\Support\Facades\Vite::image('logo-light.svg') }}" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">منو</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link active" href="#">خانه</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">تکنولوژی</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">ورزشی</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">سیاسی</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">فرهنگی</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">هنری</a>
					</li>
<li class="nav-item dropdown">
	<a class="nav-link" href="#">درباره ما</a>
</li>
<li class="nav-item dropdown">
	<a class="nav-link" href="#" >تماس ما</a>
</li>
			
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item p-1" style="margin-top: -6px;">
					<!-- Dark mode options START -->
					<div class="nav-item dropdown ms-3">
						<!-- Switch button -->
						<button class="modeswitch " id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
							data-bs-display="static">
							<svg class="theme-icon-active">
								<use href="#"></use>
							</svg>
						</button>
						<!-- Dropdown items -->
						<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
									<svg width="16" height="16" fill="currentColor"
										class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path
											d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
										</path>
										<use href="#"></use>
									</svg>روشن
								</button>
							</li>
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path
											d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
										</path>
										<path
											d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
										</path>
										<use href="#"></use>
									</svg>تیره
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
										<use href="#"></use>
									</svg>خودکار
								</button>
							</li>
						</ul>
					</div>
					<!-- Dark mode options END -->
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search" >
					<a class="nav-link dropdown-toggle p-1" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
						<form class="input-group">
							<input class="form-control border-success" type="search" placeholder="جستجو" aria-label="Search">
							<button class="btn btn-success m-0" type="submit">جستجو</button>
						</form>
					</div>
				</div>
<div class="nav-item dropdown position-relative">
	<span class="notif-badge-front animation-blink"></span>
	<a class="nav-link dropdown-toggle notif-dropdown-toggle p-2" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true"
		aria-expanded="false"><i class="bi bi-bell" style="font-size: 23px;"></i></a>
	<ul class="dropdown-menu" aria-labelledby="pagesMenu">
		<li> <a class="dropdown-item text-warning" href="about-us.html"><span class="badge bg-warning me-2">10</span>پیام خوانده نشده دارید</a></li>
		<li> <a class="dropdown-item text-danger" href="contact-us.html"><span class="badge bg-danger me-2">14</span>دیدگاه در صف بررسی می باشد</a></a></li>

	</ul>
</div>

				<!-- Offcanvas menu toggler -->
				<div class="nav-item align-self-end">
					<a class="nav-link p-0" onclick="openedSidebar()" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
						<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
					</a>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Trending START -->
<section class="py-2">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 bg-primary bg-opacity-10 p-2 ">
				<div class="d-sm-flex align-items-center text-center text-sm-start">
					<!-- Title -->
				<div class="badge bg-primary p-2 px-3">امروز : ۳۰ تیرماه ۱۴۰۳</div>
						<marquee behavior=""  direction="right" width="100%" onmouseover="this.stop();" onmouseout="this.start();">
						
								<span class="nav-item me-2">سلام</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
								<span class="nav-item me-2">sdsfsdfdfsd</span>
							
					
						</marquee>
						
				
					<!-- Slider -->
					<!-- <div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
						<div class="tiny-slider-inner"
							data-autoplay="true"
							data-hoverpause="true"
							data-gutter="0"
							data-arrow="true"
							data-dots="false"
							data-items="1">
							<!-- Slider items
							<div> <a href="#" class="text-reset btn-link">افزایش آلودگی هوا در شهرهای پُرجمعیت تا فردا</a></div>
							<div> <a href="#" class="text-reset btn-link">حضورمسیحیان در حرم سامرابا آغاز سال جدید </a></div>
							<div> <a href="#" class="text-reset btn-link">انتقاد ستاره رئال از شعارهای نژادپرستانه </a></div>
						</div>
					</div> -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Trending END -->

<!-- =======================
Main hero START -->
<section class="pt-4 pb-0 card-grid ">
	<div class="container pe-0">
			<p class="fw-bold mb-4">اخبار روز</p>
<div class="swiper" dir="rtl">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide  ">
			<div class="card card-overlay-bottom card-grid-lg card-bg-scale">
				<img class="img-fluid" src="{{ \Illuminate\Support\Facades\Vite::image('blog/1by1/01.jpg') }}" alt="">
				<!-- Card featured -->
				<!-- <span class="card-featured" title=""><i class="fas fa-star"></i></span> -->
				<!-- Card Image overlay -->
				<div class="card-img-overlay">
					<div class="w-100 h-100 position-relative">
				<!-- Publish Date -->
				<span class="position-absolute start-0 badge text-bg-light"><i class="bi bi-calendar-check me-2"></i>15 دی، 1400</span>
						<!-- Card category -->
						<a href="#" class="badge text-bg-success mb-2 position-absolute end-0 "><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
						<!-- Card title -->
								<!-- Author -->
								<div class="text-white position-absolute" style="bottom: 57px;right: 13px;">
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
									</div>
									<span class="ms-1"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
								</div>
						<h2 class="w-100 rounded px-3 py-3 slider-topic-title position-absolute bottom-0"><a class="text-white"
								href="post-single-4.html" class="">ده نشانه
								نسل جدید هدست های واقعیت مجازی سونی</a></h2>
					</div>
				</div>
			</div>
		
		</div>
		<div class="swiper-slide  ">
			<div class="card card-overlay-bottom card-grid-lg card-bg-scale">
				<img class="img-fluid" src="{{ \Illuminate\Support\Facades\Vite::image('blog/1by1/01.jpg') }}" alt="">
				<!-- Card featured -->
				<!-- <span class="card-featured" title=""><i class="fas fa-star"></i></span> -->
				<!-- Card Image overlay -->
				<div class="card-img-overlay">
					<div class="w-100 h-100 position-relative">
						<!-- Publish Date -->
						<span class="position-absolute start-0 badge text-bg-light"><i class="bi bi-calendar-check me-2"></i>15
							دی، 1400</span>
						<!-- Card category -->
						<a href="#" class="badge text-bg-success mb-2 position-absolute end-0 "><i
								class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
						<!-- Card title -->
						<!-- Author -->
						<div class="text-white position-absolute" style="bottom: 57px;right: 13px;">
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
							</div>
							<span class="ms-1"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
						</div>
						<h2 class="w-100 rounded px-3 py-3 slider-topic-title position-absolute bottom-0"><a class="text-white"
								href="post-single-4.html" class="">ده نشانه
								نسل جدید هدست های واقعیت مجازی سونی</a></h2>
					</div>
				</div>
			</div>
		
		</div>
		<div class="swiper-slide  ">
			<div class="card card-overlay-bottom card-grid-lg card-bg-scale">
				<img class="img-fluid" src="{{ \Illuminate\Support\Facades\Vite::image('blog/1by1/01.jpg') }}" alt="">
				<!-- Card featured -->
				<!-- Card Image overlay -->
				<div class="card-img-overlay">
					<div class="w-100 h-100 position-relative">
						<!-- Publish Date -->
						<span class="position-absolute start-0 badge text-bg-light"><i class="bi bi-calendar-check me-2"></i>15
							دی، 1400</span>
						<!-- Card category -->
						<a href="#" class="badge text-bg-success mb-2 position-absolute end-0 "><i
								class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
						<!-- Card title -->
						<!-- Author -->
						<div class="text-white position-absolute" style="bottom: 57px;right: 13px;">
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
							</div>
							<span class="ms-1"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
						</div>
						<h2 class="w-100 rounded px-3 py-3 slider-topic-title position-absolute bottom-0"><a class="text-white"
								href="post-single-4.html" class="">ده نشانه
								نسل جدید هدست های واقعیت مجازی سونی</a></h2>
					</div>
				</div>
			</div>
		
		</div>
		
	</div>
	<!-- If we need pagination -->
	<!-- <div class="swiper-pagination"></div> -->

	<!-- If we need navigation buttons -->
	<!-- <div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div> -->
</div>
</div>
</section>
	

<section class="my-4">
	<div class="container">
			<div class="d-flex justify-content-between align-items-baseline mb-4">
				<p class="fw-bold mb-3 fs-5 position-relative news-section-title">دسته بندی <span class="fw-normal fs-6">خبرها
					</span>
				</p>
				<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;">
			
				</div>
			</div>
		<div class="row">
			<div class="swiper-cats" dir="rtl">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide  ">
			<div class=""><a href="" class=" py-3 px-1 d-block btn btn-light" style="border-radius:.7rem;">تکنولوژی</a></div>
		</div>
				
					<div class="swiper-slide  ">
									<div class=""><a href="" class=" py-3 px-1 d-block btn btn-light"
											style="border-radius:.7rem;">ورزشی</a></div>
								</div>
				    <div class="swiper-slide  ">
												<div class=""><a href="" class=" py-3 px-1 d-block btn btn-light"
														style="border-radius:.7rem;">فرهنگی</a></div>
											</div>
					<div class="swiper-slide  ">
															<div class=""><a href="" class="py-3 px-1 d-block btn btn-light"
																	style="border-radius:.7rem;">هنری</a></div>
														</div>
					<div class="swiper-slide  ">
																		<div class=""><a href="" class="py-3 px-1 d-block btn btn-light"
																				style="border-radius:.7rem;">اقتصادی</a></div>
																	</div>
																		<div class="swiper-slide  ">
						<div class=""><a href="" class="text-center py-3 px-1 d-block btn btn-light"
								style="border-radius:.7rem;">سیاسی</a></div>
					</div>
		</div>
		</div>
		</div>
	</div>
</section>
<section class="my-4">
<div class="container">
		<div class="d-flex justify-content-between align-items-baseline mb-4">
			<p class="fw-bold mb-3 fs-5 position-relative news-section-title">داغ ترین <span class="fw-normal fs-6">خبرها
				</span>
			</p>
			<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;">

			</div>
			</div>
	<div class="row">
		<!-- Recent post widget START -->
			<!-- Recent post item -->
			<div class="col-md-6 card mb-3" >
					<div class="d-flex p-3" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);border-radius: .7rem;">
							<img class="rounded w-25"  src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/thumb/01.jpg') }}" alt="">
							<div class="d-flex flex-column justify-content-center ms-4">
								<h6><a href="post-single-2.html" class="">خرید و فروش ارز در کانال
										37 هزار تومانی</a></h6>
								<div class="small mt-1">17 بهمن، 1400</div>
							</div>
					</div>
				
			</div>
			<div class="col-md-6 card mb-3">
			<div class="d-flex p-3" style="box-shadow: 0px 2px 10px 0px #555f6921;border-radius: .7rem;">
					<img class="rounded w-25" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/thumb/01.jpg') }}" alt="">
					<div class="d-flex flex-column justify-content-center ms-4">
						<h6><a href="post-single-2.html" class="">خرید و فروش ارز در کانال
								37 هزار تومانی</a></h6>
						<div class="small mt-1">17 بهمن، 1400</div>
					</div>
				</div>
			
			</div>
		<div class="col-md-6 card mb-3">
			<div class="d-flex p-3" style="box-shadow: 0px 2px 10px 0px #555f6921;border-radius: .7rem;">
				<img class="rounded w-25" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/thumb/01.jpg') }}" alt="">
				<div class="d-flex flex-column justify-content-center ms-4">
					<h6><a href="post-single-2.html" class="">خرید و فروش ارز در کانال
							37 هزار تومانی</a></h6>
					<div class="small mt-1">17 بهمن، 1400</div>
				</div>
			</div>
		
		</div>
		<div class="col-md-6 card mb-3">
		<div class="d-flex p-3" style="box-shadow: 0px 2px 10px 0px #555f6921;border-radius: .7rem;">
				<img class="rounded w-25" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/thumb/01.jpg') }}" alt="">
				<div class="d-flex flex-column justify-content-center ms-4">
					<h6><a href="post-single-2.html" class="">خرید و فروش ارز در کانال
							37 هزار تومانی</a></h6>
					<div class="small mt-1">17 بهمن، 1400</div>
				</div>
			</div>
		
		</div>
		</div>
		<!-- Recent post widget END -->
	

	</div>
</div>
</section>
<section class="my-4 pb-0 card-grid">
	
		<div class="container">
			<div class="d-flex justify-content-between align-items-baseline mb-4">
				<p class="fw-bold mb-3 fs-5 position-relative news-section-title">جدیدترین <span
						class="fw-normal fs-6">ویدیو ها </span>
				</p>
				<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;"></div>
			</div>
			<div class="row g-4">
				<!-- Left big card -->
				<div class="col-lg-6">
					<div class="card card-overlay-bottom  card-bg-scale">
						<img class="img-fluid h-100" src="{{ \Illuminate\Support\Facades\Vite::image('blog/1by1/01.jpg') }}" alt="">
						<!-- Card featured -->
						<span class="card-featured" title=""><i class="fas fa-star"></i></span>
						<!-- Card Image overlay -->
						<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
							<div class="w-100 mt-auto">
								<!-- Card category -->
								<a href="#" class="badge text-bg-danger mb-2"><i
										class="fas fa-circle me-2 small fw-bold"></i>مگامنو</a>
								<!-- Card title -->
								<h2 class="text-white h1"><a href="post-single-4.html"
										class="btn-link stretched-link text-reset">ده نشانه که نشان می دهد برای راه اندازی
										یک استارتاپ جدید به آن نیاز دارید.</a></h2>
								<p class="text-white">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها
									و شرایط سخت تایپ به پایان رسد. </p>
								<!-- Card info -->
								<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center text-white position-relative">
												<div class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
														alt="avatar">
												</div>
												<span class="ms-3"> <a href="#"
														class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">15 دی، 1400</li>
									<li class="nav-item">5 دقیقه زمان مطالعه</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Right small cards -->
				<div class="col-lg-6">
					<div class="row g-4">
						<!-- Card item START -->
						<div class="col-12">
							<div class="card card-overlay-bottom card-grid-sm card-bg-scale"
								style="background-image:url({{ \Illuminate\Support\Facades\Vite::image('blog/1by1/02.jpg') }}); background-position: center left; background-size: cover;">
								<!-- Card Image -->
								<!-- Card Image overlay -->
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
										<!-- Card title -->
										<h4 class="text-white"><a href="post-single-4.html"
												class="btn-link stretched-link text-reset">بهترین تابلوهای Pinterest برای
												یادگیری در مورد تجارت</a></h4>
										<!-- Card info -->
										<ul
											class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
											<li class="nav-item position-relative">
												<div class="nav-link"><a href="#"
														class="stretched-link text-reset btn-link">مهدی راد</a>
												</div>
											</li>
											<li class="nav-item">18 تیر، 1400</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="col-md-6">
							<div class="card card-overlay-bottom card-grid-sm card-bg-scale"
								style="background-image:url({{ \Illuminate\Support\Facades\Vite::image('blog/1by1/03.jpg') }}); background-position: center left; background-size: cover;">
								<!-- Card Image overlay -->
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-success mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>اقتصاد</a>
										<!-- Card title -->
										<h4 class="text-white"><a href="post-single-4.html"
												class="btn-link stretched-link text-reset">دلیل کاهش نرخ دلار </a></h4>
										<!-- Card info -->
										<ul
											class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
											<li class="nav-item position-relative">
												<div class="nav-link"><a href="#"
														class="stretched-link text-reset btn-link">مسعود خالدی</a>
												</div>
											</li>
											<li class="nav-item">8 دی، 1400</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="col-md-6">
							<div class="card card-overlay-bottom card-grid-sm card-bg-scale"
								style="background-image:url({{ \Illuminate\Support\Facades\Vite::image('blog/1by1/04.jpg') }}); background-position: center left; background-size: cover;">
								<!-- Card Image overlay -->
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-info mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>ورزش</a>
										<!-- Card title -->
										<h4 class="text-white"><a href="post-single-4.html"
												class="btn-link stretched-link text-reset">جدول لیگ در پایان هفته</a></h4>
										<!-- Card info -->
										<ul
											class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
											<li class="nav-item position-relative">
												<div class="nav-link"><a href="#"
														class="stretched-link text-reset btn-link">شادی اسدی</a>
												</div>
											</li>
											<li class="nav-item">28 آذر، 1400</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="my-4 pb-0 card-grid ">
	<div class="container pe-0">
<div class="d-flex justify-content-between align-items-baseline">
	<p class="fw-bold mb-3 fs-5 position-relative news-section-title">اخبار <span class="fw-normal fs-6">تکنولوژی</span></p>
	<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;"></div>
</div>
		<div class="swiper" dir="rtl">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper p-3">
				<!-- Slides -->
				<div class="swiper-slide py-5">
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
								data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
								و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
											</div>
											<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link"></a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Slides -->
				<div class="swiper-slide py-5">
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
								data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
								اصلی
								و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
					<!-- Slides -->
					<div class="swiper-slide py-5">
						<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<!-- Sponsored Post -->
								<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
									data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
									data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
									<i class="bi bi-info-circle ps-1"></i> ویژه
								</a>
								<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی
										ضدانقلاب شده!</a></h4>
								<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
									اصلی
									و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
												</div>
												<span class="ms-3"><a href="#"
														class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">22 آذر، 1400</li>
								</ul>
							</div>
						</div>
					</div>

			</div>
			<!-- If we need pagination -->
			<!-- <div class="swiper-pagination"></div> -->

			<!-- If we need navigation buttons -->
			<!-- <div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div> -->
		</div>
	</div>
</section>
<section class="my-4 pb-0 card-grid ">
	<div class="container pe-0">
		<div class="d-flex justify-content-between align-items-baseline">
			<p class="fw-bold mb-3 fs-5 position-relative news-section-title">اخبار <span class="fw-normal fs-6">ورزشی</span></p>
			<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;"></div>
		</div>
		<div class="swiper" dir="rtl">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper p-3">
				<!-- Slides -->
				<div class="swiper-slide py-5">
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}"
								alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button"
								data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
								data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های
									بالیوودی الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
								حروفچینی دستاوردهای اصلی
								و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Slides -->
				<div class="swiper-slide py-5">
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}"
								alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button"
								data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
								data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های
									بالیوودی الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
								حروفچینی دستاوردهای
								اصلی
								و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Slides -->
				<div class="swiper-slide py-5">
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}"
								alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button"
								data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
								data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های
									بالیوودی الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
								حروفچینی دستاوردهای
								اصلی
								و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- If we need pagination -->
			<!-- <div class="swiper-pagination"></div> -->

			<!-- If we need navigation buttons -->
			<!-- <div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div> -->
		</div>
	</div>
</section>
<section class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Title -->
				<div class="mb-4 d-flex justify-content-between align-items-baseline">
				
					<p class="fw-bold mb-3 fs-5 position-relative news-section-title">منتخب <span class="fw-normal fs-6">سردبیر</span></p>
						<div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;"></div>
					
					<!-- <a href="#" class="text-body small"><u>مشاهده همه</u></a> -->
				</div>
				<div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
					<div class="tiny-slider-inner" style="float: left"
						data-autoplay="true"
						data-hoverpause="true"
						data-gutter="24"
						data-arrow="true"
						data-dots="false"
						data-items-xl="4" 
						data-items-md="3" 
						data-items-sm="2" 
						data-items-xs="1">

						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/07.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>گردشگری</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">افزایش آلودگی هوا در شهرهای پُرجمعیت تا فردا</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
												</div>
												<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">7 دی، 1400</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/08.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>ورزش</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">آمار فرزندان حاصل از روش‌های کمک‌ باروری در جهان</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<div class="avatar-img rounded-circle">
														<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
													</div>
												</div>
												<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">15 خرداد، 1400</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/09.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>سیاست</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">عادات بدی که افراد در صنعت باید آنها را ترک کنند!</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
												</div>
												<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">1 دی، 1400</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/10.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title=""><i class="fas fa-image"></i></div>
										</div>
									</div>
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>فرهنگ</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">به همین دلیل امسال سال استارت آپ ها خواهد بود؟</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
												</div>
												<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">7 آذر، 1400</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/11.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">بهترین تابلوهای پینترست برای یادگیری در مورد تجارت</a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar">
												</div>
												<span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">7 شهریور، 1400</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Section END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Footer START  -->
<footer class="bg-dark d-none d-lg-block">
	<div class="container pt-5 ">
		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">اخبار اخیر</h5>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اقتصاد</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">تقویم آزمون‌های علوم پزشکی</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-body-secondary">
						<li class="nav-item position-relative">
							<div class="nav-link"><a href="#" class="stretched-link text-reset btn-link">نازنین لطفی</a>
							</div>
						</li>
						<li class="nav-item">6 مهر، 1400</li>
					</ul>
				</div>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>فرهنگ</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">احتمال آغاز موج هشتم کرونا در کشور</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-body-secondary">
						<li class="nav-item position-relative">
							<div class="nav-link"><a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a>
							</div>
						</li>
						<li class="nav-item">29 اسفند، 1400</li>
					</ul>
				</div>
			</div>
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">دسته بندی ها</h5>
				<div class="row">
 					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="#">اخبار</a></li>
							<li class="nav-item"><a class="nav-link" href="#">اقتصاد <span class="badge text-bg-danger ms-2">2</span></a></li>
							<li class="nav-item"><a class="nav-link" href="#">فناوری و اطلاعات</a></li>
							<li class="nav-item"><a class="nav-link" href="#">اجتماعی</a></li>
							<li class="nav-item"><a class="nav-link" href="#">ورزش</a></li>
							<li class="nav-item"><a class="nav-link" href="#">رسانه</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">تقویم روز</h5>
				<p class="" style="color: #d0d4d9;">امروز : ۲۶ تیر ماه ۱۴۰۳</p>
				<ul class="nav flex-column" style="color: #d0d4d9;">
				<li class="nav-item mb-3">روز جهانی برنامه نویس</li>
				<li class="nav-item mb-3">روز بزرگداشت حکیم عمر خیام </li>
				<li class="nav-item mb-3">روز بزرگداشت حکیم عمر خیام </li>
				</ul>		
			</div>
			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">اپلیکیشن موبایل</h5>
				<p class="text-body-secondary">برنامه را دانلود کنید و آخرین اخبار فوری و مقالات روزانه را دریافت کنید.</p>
				<div class="row g-2">
					<div class="col">
						<a href="#"><img class="w-100" src="{{ \Illuminate\Support\Facades\Vite::image('app-store.svg') }}" alt="app-store"></a>
					</div>
					<div class="col">
						<a href="#"><img class="w-100" src="{{ \Illuminate\Support\Facades\Vite::image('google-play.svg') }}" alt="google-play"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Widgets END -->


	</div>

	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-4">
					<!-- Copyright -->
					<div class="text-center text-md-start fw-bold">تمامی حقوق محفوظ است 
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-center">
				
					<!-- Links -->
					<ul class="nav fw-bold text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
						<li class="nav-item"><a class="nav-link" href="#">آرشیو</a></li>
						<li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>

						<li class="nav-item"><a class="nav-link" href="#">تماس با ما</a></li>
					
					
					</ul>
				</div>
<div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">

	<ul class="nav d-flex flex-row-reverse justify-content-between align-items-end ">
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-telegram fa-fw me-2" style="font-size: 22px;"></i></a></li>
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-instagram fa-fw me-2"  style="font-size: 22px;"></i></a>
		</li>
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-whatsapp fa-fw me-2"  style="font-size: 22px;"></i></a></li>
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-twitter fa-fw me-2"  style="font-size: 22px;"></i></a></li>
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-linkedin fa-fw me-2"  style="font-size: 22px;"></i></a></li>
		<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-youtube fa-fw me-2"  style="font-size: 22px;"></i></a></li>
	</ul>
</div>

					
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->
<!-- bottom menu -->
 <nav class="navbar navbar-light justify-content-around bottom-menu bg-light d-md-none position-fixed bottom-0 w-100" style="z-index: 1000;">
	<div class="container>
		<div class="row ">
			<ul class="nav p-2">
				<a href="" class="nav-link active"><li class="nav-item d-flex"><i class="bi bi-house me-1" style="font-size: 18px;"></i>خانه</li></a>
				<a href="" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-person-lines-fill me-1" style="font-size: 18px;"></i>پروفایل</li></a>
				<a href="" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-box-arrow-in-left me-1" style="font-size: 18px;"></i>ورود - ثبت نام</li></a>
				<a href="" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-bell me-1" style="font-size: 18px;"></i>اعلانات</li></a>
			</ul>
		</div>
	</div>
 </nav>
<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>
</main>
<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Vendors -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
	const swiper = new Swiper('.swiper', {
			// Optional parameters
		slidesOffsetAfter:2.2,
		slidesOffsetBefore:2.2,
		slidesPerView:1.3,
		spaceBetween:20,
			loop: true,
		breakpoints: {
			// when window width is >= 320px
			768: {
				slidesPerView: 2.3,

			}
			}
			// If we need pagination
			// pagination: {
			// 	el: '.swiper-pagination',
			// },

			// Navigation arrows
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// },

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

	const swiper_cats = new Swiper('.swiper-cats', {
		// Optional parameters
		slidesOffsetAfter: 0,
		slidesOffsetBefore: 0,
		slidesPerView: 2.3,
			spaceBetween: 10,

		loop: true,
		breakpoints: {
			// when window width is >= 320px
			768: {
				slidesPerView: 6,

			}
		}
	});


</script>
<script>
		document.body.addEventListener('click', function(){
			document.getElementById("main").style.cssText = "margin: 0;"
		}, true); 
		
	function closedSidebar() {
			document.getElementById("main").style.cssText = "margin: 0;";
		
		}
		function openedSidebar() {
			 const mediaQuery = window.matchMedia('(min-width: 768px)')
			 if (mediaQuery.matches) {
				document.getElementById("main").style.cssText = "margin: 0 -260px 0 0;";
			}else{
				document.getElementById("main").style.cssText = "margin: 0 -750px 0 0;";
			}
		}
</script>
<!-- <script>
	const pullToRefresh = document.querySelector('.pull-to-refresh');
		let touchstartY = 0;
		document.addEventListener('touchstart', e => {
			touchstartY = e.targetTouches[0].pageY;
		});
		document.addEventListener('touchmove', e => {
			const touchY = e.targetTouches[0].pageY;
			const touchDiff = touchY - touchstartY;
			if (touchDiff > 0 && window.scrollY === 0) {
				pullToRefresh.classList.add('visible');
				e.preventDefault();
			}
		});
		document.addEventListener('touchend', e => {
			if (pullToRefresh.classList.contains('visible')) {
				pullToRefresh.classList.remove('visible');
				location.reload();
			}
		});
</script> -->
<!-- Bookmark  -->
<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas‌Bookmark" aria-labelledby="offcanvasTopLabel">
	<div class="offcanvas-header">
		<h2 class="offcanvas-title flex-grow-1 text-center fw-bold">علاقه مندی های من</h2>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="container my-3">
			<div class="row" data-masonry='{"percentPosition":true, "isOriginLeft": false}' style="direction: rtl;">
				<div class="col-sm-12 col-md-6 col-lg-4 my-4">
					<div>
						<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
							<!-- Card img -->
							<div class="position-relative placeholder-glow">
								<span class="placeholder card-img col-12 " style="margin-top: -80px;height: 200px;"></span>
								<img class="card-img d-none" style="margin-top: -80px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2 d-none"><i
												class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<!-- Sponsored Post -->
								<h4 class="card-title mt-2 placeholder-glow"><a href="post-single.html" class="btn-link text-reset">
										 </a>
									<span class="placeholder w-100"></span>
									</h4>
								<p class="card-text placeholder-glow">
										<span class="placeholder col-7"></span>
										<span class="placeholder col-4"></span>
										<span class="placeholder col-4"></span>
										<span class="placeholder col-6"></span>
										<span class="placeholder col-8"></span>
									</p>
								<!-- Card info -->
								<ul class="nav d-flex align-items-center align-items-center">
									<li class="nav-item">
											<div class="position-relative">
												<div class="placeholder-glow d-flex justify-content-center align-items-center">
													 <img class="avatar-img avatar-xs rounded-circle d-none" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}" alt="avatar"> 
													<span class="placeholder  placeholder-lg rounded-circle" style="width: 40px; height: 40px;"></span>
											</div>
										</div>
									</li>
									<li class="nav-item placeholder-glow me-3">
											<span class="ms-3 "><a href="#" class="stretched-link text-reset btn-link">
												</a>
												<span class="placeholder" style="width: 120px;"></span>
									</li>
									<li class="nav-item placeholder-glow"><span class="placeholder " style="width: 80px;"></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<div class="col-sm-12 col-md-6 col-lg-4 my-4">
				<div>
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
								data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی
									الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل .</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 my-4">
				<div>
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
								data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی
									الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
								دستاوردهای
								اصلی
								و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا مورد.و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا
								مورد.و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا مورد...</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 my-4">
				<div>
					<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
						<!-- Card img -->
						<div class="position-relative">
							<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<!-- Card overlay bottom -->
								<div class="w-100 mt-auto">
									<!-- Card category -->
									<a href="#" class="badge text-bg-warning mb-2"><i
											class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<!-- Sponsored Post -->
							<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
								data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
								data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
								<i class="bi bi-info-circle ps-1"></i> ویژه
							</a>
							<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی
									الگوی
									ضدانقلاب شده!</a></h4>
							<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل .</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<div class="avatar avatar-xs">
												<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
													alt="avatar">
											</div>
											<span class="ms-3"><a href="#"
													class="stretched-link text-reset btn-link">وحید صالحی</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">22 آذر، 1400</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
				<div class="col-sm-12 col-md-6 col-lg-4 my-4">
					<div>
						<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<!-- Sponsored Post -->
								<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
									data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
									data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
									<i class="bi bi-info-circle ps-1"></i> ویژه
								</a>
								<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی
										الگوی
										ضدانقلاب شده!</a></h4>
								<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
									دستاوردهای
									اصلی
									و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا مورد.و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا
									مورد.و جوابگوی سوالات پیوسته اهل دنیای طراحی اساسا مورد...</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
														alt="avatar">
												</div>
												<span class="ms-3"><a href="#"
														class="stretched-link text-reset btn-link">وحید صالحی</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">22 آذر، 1400</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	<div class="col-sm-12 col-md-6 col-lg-4 my-4">
		<div>
			<div class="card bg-lights p-4" style="box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);">
				<!-- Card img -->
				<div class="position-relative">
					<img class="card-img" style="margin-top: -60px;" src="{{ \Illuminate\Support\Facades\Vite::image('blog/4by3/01.jpg') }}" alt="Card image">
					<div class="card-img-overlay d-flex align-items-start flex-column p-3">
						<!-- Card overlay bottom -->
						<div class="w-100 mt-auto">
							<!-- Card category -->
							<a href="#" class="badge text-bg-warning mb-2"><i
									class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-3">
					<!-- Sponsored Post -->
					<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body"
						data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top"
						data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
						<i class="bi bi-info-circle ps-1"></i> ویژه
					</a>
					<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی
							الگوی
							ضدانقلاب شده!</a></h4>
					<p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
						دستاوردهای
						اصلی
						..</p>
					<!-- Card info -->
					<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
						<li class="nav-item">
							<div class="nav-link">
								<div class="d-flex align-items-center position-relative">
									<div class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ \Illuminate\Support\Facades\Vite::image('avatar/vahid.jpeg') }}"
											alt="avatar">
									</div>
									<span class="ms-3"><a href="#"
											class="stretched-link text-reset btn-link">وحید صالحی</a></span>
								</div>
							</div>
						</li>
						<li class="nav-item">22 آذر، 1400</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
							
			</div>
		</div>
	</div>
	</div>
	<!-- Profile -->
	<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas‌Profile"
		aria-labelledby="offcanvasTopLabel">
		<div class="offcanvas-header">
			<h2 class="offcanvas-title flex-grow-1 text-center fw-bold">پروفایل</h2>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
				<div class="container">
					<div class="row g-4">
						<!-- Profile cover and info START -->
						<div class="col-12">
							<div class="card mb-4 position-relative z-index-9">
								<!-- Cover image -->
								<div class="py-5 h-200 rounded"
									style="background-image:url({{ \Illuminate\Support\Facades\Vite::image('blog/16by9/big/07.jpg') }}); background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
								</div>
								<div class="card-body pt-3 pb-0">
									<div class="row d-flex justify-content-between">
										<!-- Avatar -->
										<div class="col-sm-12 col-md-auto text-center text-md-start">
											<div class="avatar avatar-xxl mt-n5">
												<img class="avatar-img rounded-circle border border-white border-3 shadow"
													src="{{ \Illuminate\Support\Facades\Vite::image('avatar/03.jpg') }}" alt="">
											</div>
										</div>
										<!-- Profile info -->
										<div
											class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
											<div>
												<h4 class="my-2">مهدی علیزاده <i class="bi bi-patch-check-fill text-info small"></i>
												</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> تاریخ
														عضویت 5 بهمن 1400</li>
												</ul>
												<p class="m-0"></p>
											</div>
			
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Profile info END -->
					</div>
			
					<div class="row g-4">
						<!-- Left sidebar START -->
						<div class="col-lg-7 col-xxl-8">
							<!-- Profile START -->
							<div class="card border mb-4">
								<div class="card-header border-bottom p-3">
									<h4 class="card-header-title mb-0">حساب کاربری</h4>
								</div>
								<div class="card-body">
									<!-- Full name -->
									<div class="mb-3">
										<label class="form-label">نام کامل</label>
										<div class="input-group">
											<input type="text" class="form-control" value="مهدی" placeholder="نام">
											<input type="text" class="form-control" value="علیزاده" placeholder="نام خانوادگی">
										</div>
									</div>
									<!-- Username -->
									<div class="mb-3">
										<label class="form-label">نام کاربری</label>
										<div class="input-group">
											<span class="input-group-text">gmail.com</span>
											<input type="text" class="form-control" value="example@752">
										</div>
									</div>
									<!-- Profile picture -->
									<div class="mb-3">
										<label class="form-label">تصویر پروفایل</label>
										<!-- Avatar upload START -->
										<div class="d-flex align-items-center">
											<div class="position-relative me-3">
												<!-- Avatar edit -->
												<div class="position-absolute top-0 end-0  z-index-9">
													<a class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" href="#"> <i
															class="bi bi-pencil"></i> </a>
												</div>
												<!-- Avatar preview -->
												<div class="avatar avatar-xl">
													<img class="avatar-img rounded-circle border border-white border-3 shadow"
														src="{{ \Illuminate\Support\Facades\Vite::image('avatar/03.jpg') }}" alt="">
												</div>
											</div>
											<!-- Avatar remove button -->
											<div class="avatar-remove">
												<button type="button" class="btn btn-light">حذف</button>
											</div>
										</div>
										<!-- Avatar upload END -->
									</div>
									<!-- Bio -->
									<div class="mb-3">
										<label class="form-label">درباره من</label>
										<div class="form-text mb-3">توضیحات مختصری برای پروفایل شما</div>
										<textarea class="form-control"
											rows="10" cols="10" style="min-height: 300px;" >من راهی برای دریافت پول برای سرگرمی مورد علاقه‌ام پیدا کرده‌ام و این کار را در حالی انجام می‌دهم که رویای سفر به دور دنیا را دنبال می‌کنم.</textarea>
										
									</div>
									<!-- Save button -->
									<div class="d-flex justify-content-end mt-4">
										<a href="#" class="btn text-secondary border-0 me-2">لغو</a>
										<a href="#" class="btn btn-primary">ذخیره</a>
									</div>
								</div>
							</div>
							<!-- Profile END -->
							<!-- Social links START -->
							<div class="card border mb-4">
								<div class="card-header border-bottom p-3">
									<h4 class="card-header-title mb-0"> شبکه های اجتماعی</h4>
								</div>
								<div class="card-body">
									<!-- Skype -->
									<div class="mb-3">
										<label class="form-label">تلگرام</label>
										<input class="form-control text-end" type="text" value="https://facebook.com">
									</div>
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">اینستاگرام</label>
										<input class="form-control text-end" type="email" value="https://www.linkedin.com">
									</div>
									<!-- Address -->
									<div class="mb-3">
										<label class="form-label">لینکداین</label>
										<input class="form-control text-end" type="text" value="https://twitter.com">
									</div>
									<!-- Save button -->
									<div class="d-flex justify-content-end mt-4">
										<a href="#" class="btn btn-primary">ذخیره</a>
									</div>
								</div>
							</div>
							<!-- Social links END -->
			
			
						</div>
						<!-- Left sidebar END -->
			
						<!-- Right sidebar START -->
						<div class="col-lg-5 col-xxl-4">
							<!-- Profile Setting START -->
							<div class="card border mb-4">
								<div class="card-header border-bottom p-3">
									<h4 class="card-header-title mb-0">تنظیمات حساب کاربری</h4>
								</div>
								<div class="card-body">
									<div class="form-check form-switch form-check-md mb-3">
										<input class="form-check-input" type="checkbox" id="availabilityCheck" checked="">
										<label class="form-check-label" for="availabilityCheck">نمایش اطلاعات پروفایل</label>
									</div>
								</div>
							</div>
							<!-- Profile Setting END -->
							<!-- Update password START -->
							<div class="card border mb-4">
								<div class="card-header border-bottom p-3">
									<h4 class="card-header-title mb-0">تغییر رمز عبور</h4>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<label class="form-label">رمز عبور فعلی</label>
										<input class="form-control" type="password" placeholder="*********">
									</div>
									<!-- New password -->
									<div class="mb-3">
										<label class="form-label" id="psw-strength-message"></label>
										<div class="input-group">
											<input class="form-control fakepassword" type="password" id="psw-input"
												placeholder="*********">
											<span class="input-group-text p-0">
												<i class="fakepasswordicon far fa-eye cursor-pointer p-2 w-40px"></i>
											</span>
										</div>
										<div class="rounded mt-1" id="psw-strength"></div>
									</div>
									<!-- New password -->
									<div>
										<label class="form-label">رمز عبور جدید</label>
										<input class="form-control" type="password" placeholder="*********">
									</div>
									<div class="d-flex justify-content-end mt-4">
										<a href="#" class="btn btn-primary">ذخیره</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/min/tiny-slider.min.js"></script>
</body>

</html>
