<section class="py-4">
    <div class="container">
        <div class="row pb-4">
            <div class="col-12">
                <!-- Title -->
                <h1 class="mb-0 h3">بارگزاری فایل</h1>
            </div>
            <!-- Add this to your upload.blade.php -->
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div>{{ session('error') }}</div>
            @endif
        </div>
        <div class="row">
            <form action="{{route('file-manager.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="mb-3">
                        <!-- Image -->
                        <div class="position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="my-2">آپلود تصویر </h6>
                                <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title=" فرمت های مجاز: JPG، JPEG و PNG و ابعاد
                                                پیشنهادی ما 600px * 450px است. تصاویر بزرگتر به اندازه 4:3 برش داده می شود
                                                تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.">
                                </i>
                            </div>
                            <label class="w-100" style="cursor:pointer;">
                                <div class="input-group flex-row-reverse">
                                    <input type="text" class="form-control upload-name" />
                                    <span
                                        class="btn btn-custom cursor-pointer upload-button">آپلود فایل</span>
                                </div>
                                <input id="fileInput" class="form-control stretched-link  hidden-upload d-none"
                                       type="file" name="files[]" multiple  />
                                @error('files')
                                <small class="mt-3 text-danger">{{$message}}</small>
                                @enderror
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <!-- Image PreView -->
                        <div class="row" id="preview">

                        </div>

                    </div>
                </div>
                <input class="btn btn-success" type="submit" value="آپلود">
            </form>
        </div>

            <div class="row mt-5 border border-1 pt-4 px-3 rounded overflow-y-auto" style="height: 700px">


                    <div class="col-sm-12 col-md-3 mb-4">
                        <img class="border border-1 rounded p-2 clickable-image shadow-sm" src="" alt="">
                    </div>
            </div>
            <div class="alert alert-info ">تاکنون تصوریری بارگزاری نشده است.</div>
    </div>
</section>
