<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pixel-Position</title>
</head>

<body class="bg-black text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20 ">
            <div class="nav__Logo">
                <x-nav-link href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </x-nav-link>
            </div>
            <div class="nav__Links space-x-4 font-bold">
                <x-nav-link href="/">Jobs</x-nav-link>
                <x-nav-link href="">Careers</x-nav-link>
                <x-nav-link href="">Salaries</x-nav-link>
                <x-nav-link href="">Companies</x-nav-link>
            </div>
            <div class="nav__Post flex space-x-6 font-bold items-center">
                @auth
                    <x-nav-link href='/jobs/create'>Post a Job</x-nav-link>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <x-forms.button class="bg-red-600 hover:bg-red-800 transition-colors duration-300">Log Out</x-forms.button>
                    </form>
                @endauth

                @guest
                    <div class="space-x-6 font-bold ">
                        <x-forms.button
                            class="bg-transparent border hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                            <x-nav-link class="hover:text-white" href="/login">Login</x-nav-link>
                        </x-forms.button>
                        <x-forms.button
                            class="bg-transparent border hover:border-blue-500 hover:shadow-xl transition-all duration-300 ">
                            <x-nav-link class="hover:text-white" href="/register">Register</x-nav-link>
                        </x-forms.button>

                    </div>
                @endguest
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
