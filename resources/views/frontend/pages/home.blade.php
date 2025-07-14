@extends('layouts.app')

@section('title', 'خانه')

@push('tailwind-config')
    <script src="frontend/js/tailwind-setup.js"></script>
@endpush

@push('style')
    <link rel="stylesheet" href="frontend/css/app.css">
@endpush

@section('contnet')
    <main class="main-content">
    </main>
@endsection

@push('script')
    <script src="frontend/js/app.js"></script>
@endpush
