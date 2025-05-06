<section class="py-4">
    <div class="container">
        <div class="row pb-4">
            <div class="col-12">
                <!-- Title -->
                <h1 class="mb-0 h3">ایجاد خبر جدید</h1>
            </div>
        </div>
        <div class="row">
            <form class="row" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
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
                                        <input id="con-name" name="title" type="text" class="form-control @error('title') border-danger @enderror"
                                               placeholder="عنوان خبر" value="">
                                        @error('title')
                                        <small class="mt-3 text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Post type START -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">نوع</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option" value="فوری">
                                                <label class="btn btn-outline-light w-100" for="option">
                                                    <i class="bi bi-chat-left-text fs-1"></i>
                                                    <span class="d-block"> فوری</span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option2" value="حوادث">
                                                <label class="btn btn-outline-light w-100" for="option2">
                                                    <i class="bi bi-patch-question fs-1"></i>
                                                    <span class="d-block"> حوادث </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option3" value="خبری">
                                                <label class="btn btn-outline-light w-100" for="option3">
                                                    <i class="bi bi-chat-right-dots fs-1"></i>
                                                    <span class="d-block"> خبری </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option4" value="متنی">
                                                <label class="btn btn-outline-light w-100" for="option4">
                                                    <i class="bi bi-ui-checks-grid fs-1"></i>
                                                    <span class="d-block"> متنی </span>
                                                </label>
                                            </div>

                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option5" value="چندرسانه ای">
                                                <label class="btn btn-outline-light w-100" for="option5">
                                                    <i class="bi bi-camera-reels fs-1"></i>
                                                    <span class="d-block"> چندرسانه ای </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                            <div class="flex-fill">
                                                <input type="radio" class="btn-check" name="type" id="option6" value="سایر">
                                                <label class="btn btn-outline-light w-100" for="option6">
                                                    <i class="bi bi-chat-square fs-1"></i>
                                                    <span class="d-block"> سایر </span>
                                                </label>
                                            </div>
                                            <!-- Post type item -->
                                        </div>
                                        @error('type')
                                        <small class="mt-3 text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Main toolbar -->
                                <div class="col-md-12">
                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <label class="form-label">متن خبر</label>
                                        <textarea id="newsBody" class="form-control" name="body" style="min-height: 300px"></textarea>
                                        @error('body')
                                        <small class="mt-3 text-danger">{{$message}}</small>
                                        @enderror
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
                                        <input class="form-control @error('slug') border-danger @enderror" name="slug" placeholder="نامک ...">
                                        @error('slug')
                                        <small class="mt-3 text-danger">{{$message}}</small>
                                        @enderror
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
                                        <textarea class="form-control" name="short_body" style="min-height: 100px"
                                                  placeholder="توضیح مختصری را درباره خبر بنویسید..."></textarea>
                                        @error('short_body')
                                        <small class="mt-3 text-danger">{{$message}}</small>
                                        @enderror
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
                                                   type="file" name="thumbnail"
                                                   />
                                            @error('thumbnail')
                                            <small class="mt-3 text-danger">{{$message}}</small>
                                            @enderror
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
                                    <textarea class="form-control" name="tags" rows="1"
                                              placeholder="ورزش، اقتصاد، ..."></textarea>
                                    @error('tags')
                                    <small class="mt-3 text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <!-- Message -->
                                <div class="mb-3">
                                    <label class="form-label">دسته بندی</label>
                                    <select class="form-select" name="category_id" aria-label="Default select example">

                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                        @empty
                                            <option>دسته بندی پیدا نشد!</option>
                                        @endforelse

                                    </select>
                                    @error('category_id')
                                    <small class="mt-3 text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check my-3">
                                    <input class="form-check-input" name="status" type="checkbox" value="" id="postCheck">
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
