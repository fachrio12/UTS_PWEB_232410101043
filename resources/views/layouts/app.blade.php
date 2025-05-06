<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CinemaKu - The Best Cinema Experience')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f172a;
            color: #e2e8f0;
        }
        .content-container {
            min-height: calc(100vh - 140px);
        }
        .page-transition {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="flex flex-col min-h-screen">
        
        <x-navbar />

        <main class="content-container page-transition flex-grow py-8 px-4 md:px-8">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </main>

        @include('components.footer')
    </div>
</body>
</html>
