<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'کازرون آنلاین')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="bg-gray-50">

    @include('partials.header')

    @include('partials.nav')

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')

</body>
</html>
