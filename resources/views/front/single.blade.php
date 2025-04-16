@extends('layouts.front.master')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
@include('front.partials.single.header')

        <section class="pt-0">
            <div class="container position-relative">
                <div class="row">
                    <!-- Main Content START -->
                    <div class="col-lg-12 mb-5 single-content">
                        @include('front.partials.single.social')
                        @include('front.partials.single.article')
                        @include('front.partials.single.author')
                        @include('front.partials.single.comments')
                        @include('front.partials.single.commentsReply')
                    </div>
                    <!-- Main Content END -->
                </div>
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
