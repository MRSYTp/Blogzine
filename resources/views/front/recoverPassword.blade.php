@extends('layouts.front.master')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main @style('margin:150px 0')>

        <!-- =======================
        Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
                        <div class="rounded custom-box-shadow rounded p-4 p-sm-5">
                            <h2>بازیابی کلمه عبور</h2>
                            <!-- Form START -->
                            <form class="mt-4">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
                                    <small id="emailHelp" class="form-text">ما هرگز ایمیل شما را با دیگران به اشتراک نمی گذاریم.</small>
                                </div>

                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success"> بازیابی کلمه عبور</button>
                                    </div>
                                    <div class="col-sm-8 text-sm-end">
                                        <span>آیا قبلا ثبت نام کرده اید؟ <a href="signin.html"><u>ورود</u></a></span>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
