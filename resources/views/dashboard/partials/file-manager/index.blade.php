<section class="py-4">
    <div class="container">
        <div class="row pb-4">
            <div class="col-12">
                <!-- Title -->
                <h1 class="mb-0 h3">بارگزاری فایل</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('file-manager.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="mb-3">
                        <!-- Image -->
                        <div class="position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="my-2">آپلود تصویر </h6>
                                <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title=" فرمت های مجاز: JPG، JPEG و PNG و ابعاد
                                                پیشنهادی ما 600px * 450px است. تصاویر بزرگتر به اندازه 4:3 برش داده می شود
                                                تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.">
                                </i>
                            </div>
                            <label class="w-100" style="cursor:pointer;">
                                <div class="input-group flex-row-reverse">
                                    <input type="text" class="form-control upload-name" />
                                    <span class="btn btn-custom cursor-pointer upload-button">آپلود فایل</span>
                                </div>
                                <input id="fileInput" class="form-control stretched-link  hidden-upload d-none"
                                    type="file" name="files[]" multiple />
                                @error('files')
                                    <small class="mt-3 text-danger">{{ $message }}</small>
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

        @if (!$files->isEmpty())

            <form action="{{ route('file-manager.destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="text-end">
                    <input type="submit" class="btn btn-danger" value="حذف">
                </div>
                <div class="row mt-5 border border-1 pt-4 px-3 rounded overflow-y-auto" style="max-height: 700px">

                    @foreach ($files as $file)
                        <div class="col-sm-12 col-md-3 mb-4 position-relative">

                            <div class="form-check position-absolute z-1" style="top: 10px; left: 21px">
                                <input type="checkbox" name="selectFile[]" class="form-check-input"
                                    value="{{ $file->id }}">
                            </div>
                            @if (in_array($file->type, ['jpg', 'jpeg', 'png', 'gif']))
                                <img class="img-thumbnail p-2 clickable-element"
                                    src="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}"
                                    alt=""
                                    data-url="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}">
                            @elseif(in_array($file->type, ['mp4', 'mov', 'avi']))
                                <video controls class="img-thumbnail p-2 clickable-element" data-url="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}">
                                    <source
                                        src="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}"
                                        type="video/{{ $file->type }}"
                                        >
                                </video>
                            @elseif(in_array($file->type, ['rar', 'zip']))
                                <span
                                    class="d-flex justify-content-center align-content-center bg-light h-100 img-thumbnail clickable-element"
                                    data-url="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}"><i
                                        class="far fa-file-archive fs-3 text-info "></i></span>
                            @elseif($file->type == 'txt')
                                <span
                                    class="d-flex justify-content-center align-content-center bg-light h-100 img-thumbnail clickable-element"
                                    data-url="{{ asset('uploads/file_manager/' . $file->file_name . '.' . $file->type) }}"><i
                                        class="far fa-file-word fs-3 text-info "></i></span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </form>
        @else
            <div class="alert alert-info ">تاکنون تصوریری بارگزاری نشده است.</div>
        @endif
    </div>
</section>
@include('notifications.clickBoard')