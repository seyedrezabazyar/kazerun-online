{{-- resources/views/home.blade.php --}}
@extends('layouts.frontend.app')

@section('title', 'خانه | کازرون آنلاین')
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/frontend/app.css') }}">
@endsection

@section('content')
    <!-- Content Area -->
    <main class="container mx-auto px-4 py-8">
        <div class="text-center py-20">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">محتوای سایت شما</h1>
            <p class="text-gray-600">این قسمت محتوای اصلی سایت شما قرار خواهد گرفت</p>
        </div>
    </main>
@endsection

@section('scripts')
<script type="module" src="{{ asset('assets/js/frontend/app.js') }}"></script>
@endsection