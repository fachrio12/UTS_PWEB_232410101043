<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    private $users = [
        [
            'username' => 'Rio',
            'password' => '1234',
            'memberSejak' => '2022',
            'genreFav' => 'Action',
            'filmDil' => 15,
            'ulasDit' => 5,
        ],
        [
            'username' => 'Randy',
            'password' => 'abcd',
            'memberSejak' => '2021',
            'genreFav' => 'Sci-Fi',
            'filmDil' => 20,
            'ulasDit' => 8,
        ],
        [
            'username' => 'Rheina',
            'password' => 'abcd',
            'memberSejak' => '2023',
            'genreFav' => 'Drama',
            'filmDil' => 12,
            'ulasDit' => 3,
        ],
    ];

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        foreach ($this->users as $user) {
            if ($user['username'] === $request->username && $user['password'] === $request->password) {
                session(['user' => $user]);
                return redirect()->route('dashboard');
            }
        }
    
        return back()->withErrors(['username' => 'Username atau password salah.']);
    }
    

    public function dashboard(Request $request)
    {
        $user = session('user');
        $username = $user['username'];
        $featuredMovies = [
            [
                'title' => 'Avengers: Endgame',
                'image' => 'avengers.png',
                'rating' => 4.8,
                'genre' => 'Action, Adventure, Sci-Fi',
                'duration' => '3h 1m',
            ],
            [
                'title' => 'Interstellar',
                'image' => 'stellar.jpg',
                'rating' => 4.7,
                'genre' => 'Adventure, Drama, Sci-Fi',
                'duration' => '2h 49m',
            ],
            [
                'title' => 'Minecraft',
                'image' => 'minecraft.webp',
                'rating' => 4.9,
                'genre' => 'Comedy , Adventure',
                'duration' => '1h 41m',
            ],

            [
                'title' => 'Minecraft',
                'image' => 'minecraft.webp',
                'rating' => 4.9,
                'genre' => 'Comedy , Adventure',
                'duration' => '1h 41m',
            ],

        ];
        
        return view('dashboard', compact('username', 'featuredMovies'));
    }

    public function pengelolaan(Request $request)
    {
        $user = session('user');
        $username = $user['username'];

        $movies = [
            [
                'id' => 1,
                'title' => 'Avengers: Endgame',
                'director' => 'Anthony Russo, Joe Russo',
                'year' => 2019,
                'genre' => 'Action, Adventure, Sci-Fi',
                'duration' => '3h 1m',
            ],
            [
                'id' => 2,
                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'year' => 2014,
                'genre' => 'Adventure, Drama, Sci-Fi',
                'duration' => '2h 49m',
            ],
            [
                'id' => 3,
                'title' => 'Minecraft',
                'director' => 'Jared Hess',
                'year' => 1994,
                'genre' => 'Comedy , Adventure',
                'duration' => '1h 41m',
            ],
            [
                'id' => 4,
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'year' => 2010, 
                'genre' => 'Action, Adventure, Sci-Fi',
                'duration' => '2h 28m',
            ],
            [
                'id' => 5,
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'year' => 2008,
                'genre' => 'Action, Crime, Drama',
                'duration' => '2h 32m',
            ],
        ];
        
        return view('pengelolaan', compact('username', 'movies'));
    }

    public function profile(Request $request)
{
    $user = session('user');

    return view('profile', [
        'username' => $user['username'],
        'userProfile' => [
            'memberSejak' => $user['memberSejak'],
            'genreFav' => $user['genreFav'],
            'filmDil' => $user['filmDil'],
            'ulasDit' => $user['ulasDit'],
        ],
    ]);
  }


}