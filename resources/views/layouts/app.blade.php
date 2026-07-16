<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Restaurant Menu')</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-stone-100 text-gray-800">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-black shadow-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-2xl font-bold text-yellow-500">
                <i data-lucide="utensils-crossed" class="w-8 h-8"></i>
                Restaurant Menu
            </a>

            <!-- Navigation -->
            <nav>
                <ul class="flex items-center gap-8 text-white">

                    <li>
                        <a href="{{ route('home') }}" class="flex items-center gap-2 transition hover:text-yellow-500">
                            <i data-lucide="house" class="w-5 h-5"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('menu.index') }}" class="flex items-center gap-2 transition hover:text-yellow-500">
                            <i data-lucide="chef-hat" class="w-5 h-5"></i>
                            Menu
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('reservation') }}" class="flex items-center gap-2 transition hover:text-yellow-500">
                            <i data-lucide="calendar-check" class="w-5 h-5"></i>
                            Reservation
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
    </header>

    <!-- Main -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-20 bg-black text-gray-300">

        <div class="mx-auto grid max-w-7xl gap-12 px-6 py-12 md:grid-cols-3">

            <!-- About -->
            <div>

                <h2 class="mb-5 flex items-center gap-2 text-2xl font-bold text-yellow-500">
                    <i data-lucide="utensils-crossed" class="w-7 h-7"></i>
                    Restaurant Menu
                </h2>

                <p class="leading-7">
                    Experience delicious food made with fresh ingredients,
                    exceptional service and a warm atmosphere.
                </p>

            </div>

            <!-- Opening Hours -->
            <div>

                <h2 class="mb-5 flex items-center gap-2 text-xl font-semibold text-white">
                    <i data-lucide="clock-3" class="w-6 h-6 text-yellow-500"></i>
                    Opening Hours
                </h2>

                <ul class="space-y-2">
                    <li>Monday - Friday : 09:00 - 22:00</li>
                    <li>Saturday : 10:00 - 23:00</li>
                    <li>Sunday : 10:00 - 21:00</li>
                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h2 class="mb-5 flex items-center gap-2 text-xl font-semibold text-white">
                    <i data-lucide="contact" class="w-6 h-6 text-yellow-500"></i>
                    Contact
                </h2>

                <div class="space-y-3">

                    <p class="flex items-center gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-yellow-500"></i>
                        Samarkand, Uzbekistan
                    </p>

                    <p class="flex items-center gap-3">
                        <i data-lucide="phone-call" class="w-5 h-5 text-yellow-500"></i>
                        +998 90 123 45 67
                    </p>

                    <p class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-yellow-500"></i>
                        info@restaurantmenu.uz
                    </p>

                </div>

            </div>

        </div>

        <div class="border-t border-gray-800 py-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} Restaurant Menu. All rights reserved.
        </div>

    </footer>

</body>

</html>