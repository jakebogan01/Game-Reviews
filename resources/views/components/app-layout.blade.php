<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@isset($title){{ $title }} |@endisset Gamenet</title>
        <!-- font awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- tailwindcss link -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- style css link -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="bg-gray-200">

<!--
start navbar***
-->
        <nav class="p-6 bg-white flex justify-between fixed top-0 left-0 w-full z-50">
            <ul class="items-center hidden lg:flex">
                <li>
                    <a href="{{ route('home') }}" class="p-3">
                        Games
                        <i class="fa fa-gamepad ml-1 text-lg" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- logo -->
            <a href="{{ route('home') }}" class="font-bold pt-1 lg:pl-24">
                <img src="/img/svg/gamenet_logo.svg" alt="gamenet logo">
            </a>
            <ul class="flex items-center">

                @auth <!-- checks if user is signed in -->
                    <li>
                        <a href="{{ route('admin') }}" class="p-3">
                            <span class="hidden md:inline">{{ strtolower(auth()->user()->name) }}</span>
                            <i class="fa fa-user ml-1 text-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <!-- prevents cross site scripting to log out users -->
                        <form action="{{ route('logout') }}" method="post" class="inline p-3">
                            @csrf
                            <button class="focus:outline-none" type="submit">
                                <span class="hidden md:inline">Logout</span>
                                <i class="fa fa-sign-out ml-1 text-lg" aria-hidden="true"></i>
                            </button>
                        </form>
                    </li>
                @endauth

                @guest <!-- checks if user is not signed in -->
                    <li>
                        <a href="{{ route('login') }}" class="p-3">
                            <span class="hidden md:inline">Login</span>
                            <i class="fa fa-sign-in ml-1 text-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">
                            <span class="hidden md:inline">Register</span>
                            <i class="fa fa-user-plus ml-1 text-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                @endguest
            </ul>
        </nav>
<!--
end navbar***
-->

        {{ $slot }} <!--add all content for each page-->

    </body>
</html>
