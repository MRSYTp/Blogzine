<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end  border-light" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header justify-content-end">
        <button id="closedSidebar" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column pt-0">
        <div>
            <img class="light-mode-item my-3" src="{{Vite::image('logo.svg')}}" alt="logo">
            <img class="dark-mode-item my-3" src="{{Vite::image('logo-light.svg')}}" alt="logo">
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
                <img class="offcanvas-avatar avatar-img p-1 mb-2"  src="{{Vite::image('avatar/vahid.jpeg')}}" alt="">
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
                    <form method="post" action="">
                        @csrf
                        <li class="nav-item my-1 bg-light">
                            <button type="submit" class="nav-link bg-transparent border-0 text-danger">خروج</button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvas END -->
