<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset('css/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('css/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('css/login/header/base/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/login/header/menu/light.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/brand/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/aside/dark.css') }}" rel="stylesheet">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('media/favicon.ico') }}"/>

</head>

<body>
{{--<div class="wrapper">--}}


    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                @include('partials.sidebar')
            </div>
            <!-- end:: Aside -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item ">
                      @include('partials.header')
                </div>
                <!-- end:: Header -->

                <!-- begin:: content-->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- end:: content -->

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    @include('partials.footer')
                </div>
                <!-- end:: Footer -->

            </div>
        </div>
    </div>




{{--    <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">--}}
{{--        @include('partials.sidebar')--}}
{{--    </div>--}}
{{--    @yield('content')--}}
{{--</div>--}}

{{--@include('partials.footer')--}}

</body>
</html>














