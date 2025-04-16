<div class="card border mb-4">
    <div class="card-header border-bottom p-3">
        <h4 class="card-header-title mb-0">حساب کاربری</h4>
    </div>
    <div class="card-body">
        <form action="">
        <!-- Full name -->
        <div class="mb-3">
            <label class="form-label">نام کامل</label>
            <div class="input-group">
                <input type="text" class="form-control" value="وحید" placeholder="نام">
                <input type="text" class="form-control" value="صالحی" placeholder="نام خانوادگی">
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


                            <label class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1 ">
                                <i class="bi bi-pencil"></i> <input type="file" id="imageInput" style="display: none;" name="image">

                            </label>
                        <input type="text" name="croppedImage" id="croppedImage">
                        <button class="btn btn-primary" id="openModalButton" data-bs-toggle="modal" data-bs-target="#cropModal">Crop Image</button>

                    </div>
                    <!-- Avatar preview -->
                    <div class="avatar avatar-xl">
                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                             src="{{Vite::image('avatar/vahid.jpeg')}}" alt="">


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
                        <input class="form-control text-end" type="text" value="https://www.linkedin.com">
                    </div>
                    <!-- Address -->
                    <div class="mb-3">
                        <label class="form-label">لینکداین</label>
                        <input class="form-control text-end" type="text" value="https://twitter.com">
                    </div>
                </div>
            </div>

            <!-- Save button -->
        <div class="d-flex justify-content-end mt-4">
            <a href="#" class="btn text-secondary border-0 me-2">لغو</a>
            <a href="#" class="btn btn-primary">ذخیره</a>
        </div>
        </form>
    </div>
</div>
<!-- Crop Modal -->
<div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="image" style="max-width: 100%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="cropButton">Crop and Upload</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    let cropper;
    const imageInput = document.getElementById('imageInput');
    const image = document.getElementById('image');
    const croppedImageInput = document.getElementById('croppedImage');

    imageInput.addEventListener('change', (event) => {
        const files = event.target.files;
        const done = (url) => {
            image.src = url;
        };
        if (files && files.length > 0) {
            const reader = new FileReader();
            reader.onload = (e) => {
                done(e.target.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $('#cropModal').on('shown.bs.modal', () => {
        // Initialize Cropper after the modal is shown
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 1,
        });
    }).on('hidden.bs.modal', () => {
        // Destroy the cropper instance when the modal is hidden
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('cropButton').addEventListener('click', () => {
        const canvas = cropper.getCroppedCanvas();
        canvas.toBlob((blob) => {
            const reader = new FileReader();
            reader.onloadend = () => {
                // Set the base64 string to the hidden input
                croppedImageInput.value = reader.result;
                // Close the modal
                $('#cropModal').modal('hide');
            };
            reader.readAsDataURL(blob);
        });
    });
</script>
