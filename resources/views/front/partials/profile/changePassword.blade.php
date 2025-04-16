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
