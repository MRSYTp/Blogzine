
<section class="py-4">
    <div class="container">
        <div class="row pb-4">
            <div class="col-12">
                <!-- Title -->
                <h1 class="mb-0 h3">ویرایش خبر</h1>
            </div>
        </div>
        <div class="row">
            <form class="row" action="">
                <div class="col-sm-12 col-md-8">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Form START -->

                            <!-- Main form -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Post name -->
                                    <div class="mb-3">
                                        <label class="form-label">عنوان</label>
                                        <input required id="con-name" name="name" type="text" class="form-control"
                                               placeholder="عنوان خبر">
                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است.</small>
                                    </div>
                                </div>
                                <!-- Post type START -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">نوع</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option">
                                                <label class="btn btn-outline-light w-100" for="option">
                                                    <i class="bi bi-chat-left-text fs-1"></i>
                                                    <span class="d-block"> فوری</span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option2">
                                                <label class="btn btn-outline-light w-100" for="option2">
                                                    <i class="bi bi-patch-question fs-1"></i>
                                                    <span class="d-block"> حوادث </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option3" checked>
                                                <label class="btn btn-outline-light w-100" for="option3">
                                                    <i class="bi bi-chat-right-dots fs-1"></i>
                                                    <span class="d-block"> خبری </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option4">
                                                <label class="btn btn-outline-light w-100" for="option4">
                                                    <i class="bi bi-ui-checks-grid fs-1"></i>
                                                    <span class="d-block"> متنی </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option5">
                                                <label class="btn btn-outline-light w-100" for="option5">
                                                    <i class="bi bi-camera-reels fs-1"></i>
                                                    <span class="d-block"> چندرسانه ای </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="poll" id="option6">
                                                <label class="btn btn-outline-light w-100" for="option6">
                                                    <i class="bi bi-chat-square fs-1"></i>
                                                    <span class="d-block"> سایر </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Main toolbar -->
                                <div class="col-md-12">
                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <label class="form-label">متن خبر</label>
                                        <textarea id="newsBody" class="form-control" name="" style="min-height: 300px"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- slug -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">نامک</label>
                                            <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title=" ( برای seo بهتر است عنوانی مناسب شامل کلمات کلیدی این خبر برای این مطلب انتخاب کرده و هر کلمه را با - از هم جدا نمایید )">
                                            </i>
                                        </div>
                                        <input class="form-control" name="" placeholder="نامک ...">

                                    </div>
                                </div>
                                <!-- Short description -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">توضیح مختصر</label>
                                            <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="توضیح مختصری در مورد این خبر شامل کلمات کلیدی و حداکثر شامل ۲۶۰ کارکتر بنویسید">
                                            </i>
                                        </div>
                                        <textarea class="form-control" style="min-height: 100px"
                                                  placeholder="توضیح مختصری را درباره خبر بنویسید..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="col-12">
                                <div class="mb-3">
                                    <!-- Image -->
                                    <div class="position-relative">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="my-2">آپلود تصویر شاخص</h6>
                                            <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title=" فرمت های مجاز: JPG، JPEG و PNG و ابعاد
                                                پیشنهادی ما 600px * 450px است. تصاویر بزرگتر به اندازه 4:3 برش داده می شود
                                                تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.">
                                            </i>
                                        </div>
                                        <label class="w-100" style="cursor:pointer;">
                                            <div class="input-group flex-row-reverse">
                                                <input type="text" class="form-control upload-name"/>
                                                <span
                                                    class="btn btn-custom cursor-pointer upload-button">آپلود فایل</span>
                                            </div>
                                            <input id="fileInput" class="form-control stretched-link  hidden-upload d-none"
                                                   type="file" name="my-image"
                                                   accept="image/gif, image/jpeg, image/png"/>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <!-- Image PreView -->
                                    <img id="preview" src="" alt="Image Preview" hidden>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Tags -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <label class="form-label">برچسب</label>
                                        <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="حداکثر 14 کلمه کلیدی، کلمات کلیدی باید با حروف کوچک و با کاما از هم جدا
                                                شوند. به عنوان مثال، جاوا اسکریپت، واکنش، بازاریابی">
                                        </i>
                                    </div>
                                    <textarea class="form-control" rows="1"
                                              placeholder="ورزش، اقتصاد، ..."></textarea>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <!-- Message -->
                                <div class="mb-3">
                                    <label class="form-label">دسته بندی</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>اقتصاد</option>
                                        <option value="1">تکنولوژی</option>
                                        <option value="2">رسانه</option>
                                        <option value="3">گردشگری</option>
                                        <option value="4">ورزش</option>
                                        <option value="5">سیاست</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check my-3">
                                    <input class="form-check-input" type="checkbox" value="" id="postCheck">
                                    <label class="form-check-label" for="postCheck">
                                        ارسال برای بازبینی
                                    </label>
                                </div>
                            </div>

                            <!-- Create post button -->
                            <div class="col-md-12 text-start">
                                <button id="preview" class="btn btn-success w-100" type="submit">ذخیره</button>

                            </div>


                        </div>
                    </div>
                </div>
            </form>
            {{--            Form End--}}
        </div>
    </div>
</section>
