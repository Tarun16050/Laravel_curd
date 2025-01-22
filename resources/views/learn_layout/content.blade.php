@extends('learn_layout.layout')
@section('content')
    <h1 class="text-center">This is a content Page</h1>
    <h3>content</h3>
    <h4>Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live events, such as conferences and stage performances.
        Content is the information and experiences that are directed towards an end-user or audience. Content is "something that is to be expressed through some medium, as speech, writing or any of various arts". Content can be delivered via many different media including the Internet, television, audio CDs, books, magazines, and live

    </h4>
    <h1>
        Using Javascript in Laravel Blade
    </h1>
@verbatim
<div id="app">{{ message }}</div>
@endverbatim

    @php
        $name = 'Tarun Patidar';
    @endphp
    {{-- <script>
        var data = {{ Js::from($name) }};
        alert('Hello '+ @json($name));
    </script> --}}
@endsection
@push('scripts')
{{--
    <script>
         var data = {{ Js::from($name) }};
         alert('Hello '+ @json($name));

         var message = 'this msaage is coming from the javascipt and showing in  php blade file';
    </script> --}}

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello from Vue 3! this message is coming from the vue js')
      return {
        message
      }
    }
  }).mount('#app')
</script>

@endpush
