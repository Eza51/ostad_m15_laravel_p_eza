<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('meta_description', '')" />
    <meta name="author" content="@yield('meta_author', '')" />
    <title>@yield('title', 'My Laravel App')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assest/assets/favicon.ico') }}" />

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;400;700&display=swap" rel="stylesheet" />

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    {{-- Styles --}}
    <link href="{{ asset('assest/css/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('components.navbar')

        @yield('header') 
        @yield('content')
    </main>

    @include('components.footer')

    {{-- Bootstrap & Custom JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assest/js/scripts.js') }}"></script>
</body>
</html>
