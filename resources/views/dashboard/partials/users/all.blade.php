<!-- **************** MAIN CONTENT START **************** -->
<section class="py-4">
    <div class="container">
        <div class="row pb-4">
            <div class="col-12">
                <!-- Title -->
                <div class="d-sm-flex justify-content-sm-between align-items-center">
                    <h1 class="mb-2 mb-sm-0 h3">لیست کاربران <span class="badge bg-primary bg-opacity-10 text-primary">200</span></h1>
                    <a href="#" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-plus me-2"></i>کاربر جدید</a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <!-- Blog list table START -->
                <div class="card border bg-transparent rounded-3">
                    <!-- Card body START -->
                    <div class="card-body p-0">
                        <!-- Blog list table START -->
                        <div class="table-responsive border-0">
                            <table class="table p-4 mb-0 table-shrink table-hover">
                                <!-- Table head -->
                                <thead class="table-light" >
                                <tr>

                                    <th scope="col" class="border-0 text-center fw-normal">کاربر</th>
                                    <th scope="col" class="border-0 text-center fw-normal">ایمیل</th>
                                    <th scope="col" class="border-0 text-center fw-normal">نقش</th>
                                    <th scope="col" class="border-0 text-center fw-normal">وضعیت</th>
                                    <th scope="col" class="border-0 text-center fw-normal">عملیات</th>
                                </tr>
                                </thead>
                                <!-- Table body START -->
                                <tbody class="border-top-0">
                                <tr>
                                    <!-- Table data -->
                                    <td class="text-center align-middle" @style('width:230px')>

                                        <img class="rounded-circle p-1 border" width="50px" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="">
                                        <span class="ms-1" >وحید صالحی</span>

                                    </td>
                                    <td class="text-center align-middle">
                                        <p class="course-title mb-0 ">va.salehi@gmail.com</p>

                                    </td>
                                    <!-- Table data -->

                                    <!-- Table data -->
                                    <td class="text-center align-middle">
                                        <span class="badge bg-secondary">عادی</span>
                                    </td>
                                    <!-- Table data -->
                                    <td class=" align-middle">
                                        <div class="form-check form-switch form-check-md  d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="checkReview1">
                                        </div>
                                    </td>
                                    <!-- Table data -->
                                    <td class="text-center align-middle">
                                        <!-- dropdown button -->

                                        <div class="d-flex">
                                            <a class="dropdown-item"  href="#" ><i class="bi bi-pencil-square fa-fw text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"></i></a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash fa-fw text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                                <!-- Table body END -->
                            </table>
                        </div>
                        <!-- Blog list table END -->

                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-2 mt-sm-3 px-3 pb-3">
                            <!-- Content -->
                            <p class="mb-sm-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
                            <!-- Pagination -->
                            <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-sm pagination-bordered mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبل</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">بعد</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                </div>
                <!-- Blog list table END -->
            </div>
        </div>
    </div>
</section>
<!-- **************** MAIN CONTENT END **************** -->
<!-- Popup modal for reviwe START -->
<div class="modal fade" id="reply" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" >پاسخ شما</h5>
                <button type="button" class="btn btn-sm btn-light text-dark mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x fs-5"></i></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <!-- Text -->
                <div>
                    <form action="">
                        <textarea class="form-control h-200"   placeholder="پاسخ خود را وارد نمایید ..."></textarea>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">ثبت</button>
            </div>
        </div>
    </div>
</div>

<!-- Popup modal for add new User START -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="viewReviewLabel">کاربر جدید</h5>
                <button type="button" class="btn btn-sm btn-light text-dark mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x fs-5"></i></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="mb-2">نام و نام خانوادگی</label>
                        <input type="text" name="" id="name" class="form-control" placeholder="نام و نام خانوادگی ..." >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="mb-2">ایمیل</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder=" ایمیل ..." >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="mb-2">کلمه عبور</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder=" کلمه عبور ..." >
                    </div>
                    <div class="mb-3">
                        <label for="repeat-password" class="mb-2">تکرار کلمه عبور</label>
                        <input type="password" name="repeat-password" id="repeat-password" class="form-control" placeholder=" تکرار کلمه عبور ..." >
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">ثبت</button>
            </div>
        </div>
    </div>
</div>
<!-- Popup modal for add new User END -->
<!-- Popup modal for add edit User START -->
