<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!--- Font Awesome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--- Custom CSS --->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">


    <title>Filaflex - Home</title>
</head>
<body> 
@vite('resources/css/app.css')
    <nav class="bg-white text-black">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('images/Logo.svg')}}" alt="Logo" class="h-10">
                    </a>
                </div>
                <ul class="hidden md:flex space-x-6">
                    <li><a href="{{route('frontend.about')}}" class="hover:text-gray-400">A empresa</a></li>
                    <li><a href="{{route('frontend.service')}}" class="hover:text-gray-400">Serviços</a></li>
                    <li><a href="{{route('frontend.career')}}" class="hover:text-gray-400">Carreira</a></li>
                    <li><a href="{{route('frontend.contact')}}" class="hover:text-gray-400">Contato</a></li>
                    <div class="block md:hidden">
                        <div class="px-5 py-2 bg-[#44C42F] text-white flex gap-2 rounded-full">
                            <img src="{{asset('images/Search.svg')}}"  class="cursor-pointer"
                            alt="" srcset="">
                            <a href="#" id="pesquisa" class=""> Pesquisa</a>
                        </div>
                    </div>
                </ul>
                <div class="hidden md:block">
                    <div class="px-5 py-2 bg-[#44C42F] text-white flex gap-2 rounded-full">
                        <img src="{{asset('images/Search.svg')}}"  class="cursor-pointer"
                        alt="" srcset="">
                        <a href="#" id="pesquisa" class=""> Pesquisa</a>
                    </div>
                </div>
        
                <button class="mobile-menu-icon md:hidden focus:outline-none" onclick="toggleMenu()">
                    &#9776;
                </button>
            </div>
            <ul class="md:hidden flex-col space-y-4 pt-4 py-5 hidden" id="mobile-menu">
                <li><a href="{{route('frontend.about')}}" class="hover:text-gray-400">A empresa</a></li>
                <li><a href="{{route('frontend.service')}}" class="hover:text-gray-400">Serviços</a></li>
                <li><a href="{{route('frontend.career')}}" class="hover:text-gray-400">Carreira</a></li>
                <li><a href="{{route('frontend.contact')}}" class="hover:text-gray-400">Contato</a></li>
                <li class="block md:hidden">
                    <a href="#" id="pesquisa" class=""> Pesquisa</a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif