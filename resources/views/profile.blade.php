@extends('layouts.app')

@section('title', 'Profile - CinemaKu')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center md:text-left">
            <h1 class="text-3xl font-bold text-white">Profil Pengguna</h1>
            <p class="mt-2 text-xl text-gray-300">Halo, {{ $username }}!</p>
        </div>

        <div class="mt-10 md:flex md:space-x-6 justify-center">
            <div class="md:w-1/3">
                <div class="bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex flex-col items-center">
                        <div class="w-32 h-32 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-gray-400 text-[75px]"></i>
                        </div>
                    </div>

                    <h2 class="mt-4 text-xl font-bold text-white text-center">{{ $username }}</h2>
                    <p class="text-gray-400 text-center">Member sejak {{ $userProfile['memberSejak'] }}</p>

                    <div class="mt-6 w-full">
                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-gray-400">Genre Favorit</span>
                            <span class="text-white font-medium">{{ $userProfile['genreFav'] }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-gray-400">Film Ditonton</span>
                            <span class="text-white font-medium">{{ $userProfile['filmDil'] }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-gray-400">Ulasan Ditulis</span>
                            <span class="text-white font-medium">{{ $userProfile['ulasDit'] }}</span>
                        </div>
                    </div>

                    <div class="mt-6 w-full">
                        <button class="w-full px-4 py-2 bg-red-600 text-white text-sm font-medium rounded hover:bg-red-700 transition duration-150">
                            Edit Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
