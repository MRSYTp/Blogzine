@extends('layouts.front.master')

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
            <div class="rounded custom-box-shadow rounded p-4 p-sm-5">
                        <h2>ثبت نام در سایت </h2>
                        <!-- Form START -->
                        <form class="mt-4" action="{{route('registerController')}}" method="POST">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">نام و نام خانوادگی</label>
                                <input type="text" name="name" class="form-control @error('name') border-danger @enderror" value="{{old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام و نام خانوادگی">
                                @error('name')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                <input type="email" name="email" class="form-control @error('email') border-danger @enderror" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
                                @error('email')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                <input type="password" name="password" class="form-control @error('password') border-danger @enderror" id="exampleInputPassword1" placeholder="*********">
                                @error('password')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword2">تایید رمز عبور</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="*********">
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">ثبت نام</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>آیا قبلا ثبت نام کرده اید؟ <a href="signin.html"><u>ورود</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                            <ul class="list-unstyled d-flex mt-3 justify-content-center">
                                <li class="mx-2">
                                    <a href="#" class="btn btn-light d-inline-block fs-6">github<i
                                            class="fab fa-github text-dark align-middle ms-2 fs-5"></i></a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="btn btn-light d-inline-block fs-6">google<i
                                            class="fab fa-google text-danger align-middle ms-2 fs-5"></i></a>
                                </li>
                            </ul>
                        </div>
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