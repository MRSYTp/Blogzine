<!-- Profile -->
<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas‌Profile"
     aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header my-4">
        <h2 class="offcanvas-title flex-grow-1 text-center fw-bold">پروفایل کاربری</h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container">
            <div class="row g-4">
                <!-- Profile cover and info START -->
                <div class="col-12">
                    <div class="card mb-4 position-relative z-index-9">
                        <!-- Cover image -->
                        <div class="py-5 h-200 rounded position-relative"

                             style="background-image:url({{Vite::image('blog/16by9/big/07.jpg')}});

                             background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
                            <div class="position-absolute  z-index-9" @style('bottom:10px;left:16px')>
                                <form action="">

                                      <label class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1 ">
                                          <i class="bi bi-pencil"></i> <input type="file" style="display: none;" name="image">
                                      </label>

                                </form>

                            </div>
                        </div>

                        <div class="card-body pt-3 pb-0">
                            <div class="row d-flex justify-content-between">
                                <!-- Avatar -->
                                <div class="col-sm-12 col-md-auto text-center text-md-start">
                                    <div class="avatar avatar-xxl mt-n5">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                             src="{{Vite::image('avatar/vahid.jpeg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div
                                    class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="my-2">وحید صالحی<i class="bi bi-patch-check-fill text-info small"></i>
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
                    @include('front.partials.profile.profile')
                    @include('front.partials.profile.social')
                </div>
                <!-- Left sidebar END -->
                <!-- Right sidebar START -->
                <div class="col-lg-5 col-xxl-4">
                    @include('front.partials.profile.setting')
                    @include('front.partials.profile.changePassword')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Profile -->
