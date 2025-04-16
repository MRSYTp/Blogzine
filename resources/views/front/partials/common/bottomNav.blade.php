<!-- bottom menu -->
<nav class="navbar navbar-light justify-content-around bottom-menu bg-light d-md-none position-fixed bottom-0 w-100" style="z-index: 1000;">
    <div class="container>
		<div class="row ">
    <ul class="nav p-2">
        <a href="" class="nav-link active"><li class="nav-item d-flex"><i class="bi bi-house me-1" style="font-size: 18px;"></i>خانه</li></a>
        @auth()
            <a href="" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-person-lines-fill me-1" style="font-size: 18px;"></i>پروفایل</li></a>
        @endauth
        @guest()
            <a href="{{route('login')}}" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-box-arrow-in-left me-1" style="font-size: 18px;"></i> ورود</li></a>
            <a href="{{route('register')}}" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-person-fill-add me-1" style="font-size: 18px;"></i>  ثبت نام</li></a>
        @endguest
        <a href="" class="nav-link"><li class="nav-item d-flex"><i class="bi bi-bell me-1" style="font-size: 18px;"></i>اعلانات</li></a>
    </ul>
    </div>
    </div>
</nav>
<!-- Back to top -->
