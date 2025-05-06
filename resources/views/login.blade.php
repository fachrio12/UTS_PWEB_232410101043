@extends('layouts.app')

@section('title', 'Login - CinemaKu')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h1 class="text-center text-3xl font-extrabold text-red-500">CinemaKu</h1>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                masuk ke akunmu
            </h2>
            <p class="mt-2 text-center text-sm text-gray-400">
                masuk untuk mendapatkan informasi film lebih jauh
            </p>
            
@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong>Gagal masuk!</strong>
        <ul class="mt-1 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
        <form class="mt-8 space-y-6" action="{{ route('process.login') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" class="block min-w-full grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" name="password" id="password" class="block min-w-full grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="password">
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium  text-white bg-red-600 hover:bg-red-700">
                    masuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection