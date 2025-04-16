
@include('front.partials.common.header')
@auth()
@include('front.partials.common.sidebarOffCanvasMain')
@endauth
@include('front.partials.common.topNav')
@yield('content')
@include('front.partials.common.bottomNav')
@auth()
@include('front.partials.common.profile')
@include('front.partials.common.bookmark')
@endauth
@include('front.partials.common.footer')
