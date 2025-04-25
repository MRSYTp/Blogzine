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
                        <div class="rounded custom-box-shadow p-4 p-sm-5">
                            <h2>بروزرسانی کلمه عبور</h2>
                            @if($errors->has('error'))
                                <div class="alert alert-danger">
                                    {{$errors->first('error')}}
                                </div>
                            @endif
                            @error('token')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <!-- Form START -->
                            <form action="{{route('password.update')}}" method="post" class="mt-4">
                                @csrf
                                <input type="hidden" name="token" value="{{$token}}">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" name="email" value="{{request()->get('email')}}" class="form-control @error('email') border-danger  @enderror"" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
                                    @error('email')
                                    <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror

                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                    <input type="text" name="password"
                                           class="form-control @error('password') border-danger  @enderror"
                                            id="exampleInputPassword1"
                                           placeholder="*********">
                                    @error('password')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <!-- Password Confirmation -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword2">تایید رمز عبور</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                           id="exampleInputPassword2" placeholder="*********">
                                </div>
                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success"> بازیابی کلمه عبور</button>
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
