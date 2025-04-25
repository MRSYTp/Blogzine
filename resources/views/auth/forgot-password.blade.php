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
                        <h2>بازیابی کلمه عبور</h2>
                        @if($errors->has('error'))
                            <div class="alert alert-danger">
                                {{$errors->first('error')}}
                            </div>
                        @endif
                        <!-- Form START -->
                        <form action="{{route('password.email')}}" method="post" class="mt-4">
                        @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
                                @error('email')
                                <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                                @enderror

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
