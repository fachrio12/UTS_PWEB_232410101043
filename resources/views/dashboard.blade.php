@extends('layouts.app')

@section('title', 'Dashboard - CinemaKu')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center md:text-left">
            <h1 class="text-3xl font-bold text-white">Selamat datang, {{ $username }}!</h1>
            <p class="mt-2 text-xl text-gray-300">Temukan film-film terbaik hanya di CinemaKu</p>
        </div>

        <div class="mt-8 bg-gradient-to-r from-gray-800 to-gray-900 rounded-xl overflow-hidden shadow-xl">
            <div class="md:flex">
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h2 class="text-2xl md:text-3xl font-bold text-white">Cinemaku</h2>
                    <p class="mt-4 text-gray-300 text-lg">Nikmati pengalaman menonton dengan kualitas gambar dan suara terbaik tanpa perlu pergi ke bioskop</p>
                </div>
                <div class="md:w-1/2 bg-gray-700 h-64 md:h-auto">
                    <div class="h-full w-full bg-[url('https://cdn.antaranews.com/cache/1200x800/2022/02/04/Screenshot_2022-02-04-06-04-11-69_copy_1024x683.jpg?w=800')] bg-cover bg-center"></div>
                </div>
            </div>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-bold text-white mb-6">Film Unggulan</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($featuredMovies as $movie)
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                    <div class="h-64 bg-gray-700">
                        <img src="{{asset('images/'.$movie['image'])}}" alt="{{ $movie['title'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-white">{{ $movie['title'] }}</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                {{ $movie['rating'] }}
                            </span>
                        </div>
                        <p class="mt-2 text-gray-400">{{ $movie['genre'] }}</p>
                        <p class="text-gray-400">{{ $movie['duration'] }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="#" class="text-red-500 hover:text-red-400 font-medium">Detail</a>
                            <button class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded hover:bg-red-700 transition duration-150">Tonton</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection