<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="min-h-screen antialiased md:flex" x-data="{open: false}">
    <nav class="absolute inset-0 z-10 h-screen p-3 text-white duration-200 transform bg-gray-900 w-80 md:sticky md:h-screen md:top-0 md:transform-none md:opacity-100 md:relative" :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}">
        <div class="flex justify-between">
            <span class="p-2 text-2xl font-bold sm:text-3xl">{{ env('APP_NAME') }}</span>
            <button class="p-2 rounded-md focus:outline-none focus:bg-gray-800 hover:bg-gray-800 md:hidden" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>
        <ul class="mt-8">
            <li class="">
                @include('layouts.navigation-links')
            </li>
        </ul>
    </nav>
    <div class="relative z-0 md:flex-grow">
        <header class="sticky top-0 flex items-center px-3 text-white bg-gray-900">
            <button class="p-2 rounded-md focus:outline-none focus:bg-gray-600 hover:bg-gray-600 md:hidden" @click="open = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <span class="block p-4 text-2xl font-bold sm:text-3xl">{{ getCurrentPageName() }}</span>
        </header>
        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
