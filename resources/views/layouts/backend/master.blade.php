
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('assets/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>{{ config('app.name') }}</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}" />
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <!-- END: CSS Assets-->
    </head>
<body class="main">
    <div id="app">
     @include('layouts.backend.components.header')
<div class="flex">

    @include('layouts.backend.components.sidebar')
    <div class="content">
        @include('layouts.backend.components.topbar')

            @yield('content')
       
    </div>
</div>

</div>
@include('layouts.backend.components.footer')
</body>

</html>
