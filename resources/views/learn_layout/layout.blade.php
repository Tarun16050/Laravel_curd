@include('learn_layout.header')
    <h1 class="text-center">Hello Tarun Patidar</h1>
    @include('learn_layout.nav_bar')
    <div class="container">
        @yield('content')
    </div>
@include('learn_layout.footer')
@stack('scripts')
