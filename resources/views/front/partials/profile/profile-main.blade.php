<div class="card border mb-4">
    <div class="card-header border-bottom p-3">
        <h4 class="card-header-title mb-0">حساب کاربری</h4>
    </div>
    <div class="card-body">
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
                        <form action="">

                            <label class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1 ">
                                <i class="bi bi-pencil"></i> <input type="file" style="display: none;" name="image">
                            </label>

                        </form>
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
        <!-- Save button -->
        <div class="d-flex justify-content-end mt-4">
            <a href="#" class="btn text-secondary border-0 me-2">لغو</a>
            <a href="#" class="btn btn-primary">ذخیره</a>
        </div>
    </div>
</div>
