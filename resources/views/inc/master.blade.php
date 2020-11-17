<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>CRM PROMESS @yield('title')</title>

    <meta name="csrf_token" content="{{ csrf_token() }}" />
      @include('inc.styles') 

    {{-- @include('inc.sidebar') --}}

    <script>
        var BASE_URL = '{{ url("/") }}';
    </script>

</head>
<body >

    <section id="container">
        {{-- @include('inc.header') --}}
            <div class="content-wrapper">
             @yield('content')
        </div>
        @include('inc.footer')
    </section>
    @yield('scripts')
</body>
</html>
