<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <header class="bg-gradient-to-br bg-purple-950  absolute top-0 left-0 w-full flex
    items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">

                    <a href="#home" class="font-bold text-5xl text-primary block
                py-6 tracking-widest"><i class="fa-solid fa-compact-disc fa-spin fa-xs" style="color: #c2185d;"></i></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out  origin-bottom-left "></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-dark shadow-lg rounded-lg max-w-[250px] w-full 
                    right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="" class="text-base text-slate-300 rounded-xl bg-gradient-to-br from-blue-500 via-violet-900 to-purple-500 border-violet-950 p-3 py-2
                            mx-3 flex hover:shadow-lg hover:bg-opacity-80 duration-300 ease-in-out
                            hover:text-slate-800">Sign out</a>
                            </li>

                            <li class="group">
                                <a href="" class="text-base text-slate-300 py-2
                            mx-8 flex  group-hover:text-slate-900">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-slate-900">About me</a>
                            </li>

                            <li class="group">
                                <a href="#portofolio" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-slate-900">Gallery</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-slate-900">Contact</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
</body>

</html>