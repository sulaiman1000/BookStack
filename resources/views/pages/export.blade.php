<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $page->name }}</title>

    <style>
        @if (!app()->environment('testing'))
        {!! file_get_contents(public_path('/css/ar/export-styles.css')) !!}
        @endif
    </style>
    @yield('head')
</head>
<body>
<div class="container" id="page-show">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-content">

                @include('pages.page-display')

                <hr>

                @include('partials.entity-meta', ['entity' => $page])

            </div>
        </div>
    </div>
</div>
</body>
</html>
