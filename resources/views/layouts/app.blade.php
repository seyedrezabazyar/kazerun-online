<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=vazir:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config Setup -->
    @stack('tailwind-config')

    <!-- style file -->
    @stack('style')
</head>

<body>
    <!-- Header -->
    @include('components.layout.header')

    <!-- Main Content -->
    @yield('contnet')

    <!-- Footer -->
    @include('components.layout.footer')

    <!-- Js File -->
    @stack('script')
</body>


</html>
