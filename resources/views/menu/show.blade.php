@extends('layouts.app')

@section('title', 'Menu Details | Restaurant Menu')

@section('content')

<section class="bg-stone-100 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid gap-12 lg:grid-cols-2 items-center">

            <!-- Image -->
            <div class="h-[500px] overflow-hidden rounded-2xl shadow-xl">
                <img
                    src="{{ $menu['image'] }}"
                    alt="{{ $menu['name'] }}"
                    class="h-full w-full object-cover">
            </div>

            <!-- Details -->
            <div>

                <span class="inline-block rounded-full bg-yellow-500 px-4 py-2 text-sm font-semibold text-white">
                    {{$menu['cooking_time'] }}
                </span>

                <h1 class="mt-5 text-5xl font-bold text-gray-900">
                    {{ $menu['name'] }}
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    {{ $menu['description'] }}
                </p>

                <div class="mt-8 flex items-center gap-8">

                    <div>
                        <p class="text-gray-500">Price</p>

                        <h2 class="text-4xl font-bold text-yellow-500">
                            ${{ $menu['price'] }}
                        </h2>
                    </div>

                    <div>
                        <p class="text-gray-500">Category</p>

                        <h2 class="text-2xl font-semibold">
                            {{ $menu['category'] }}
                        </h2>
                    </div>

                </div>

                <div class="mt-10 flex gap-4">

                    <a
                        href="{{ route('menu.index') }}"
                        class="rounded-lg bg-black px-8 py-4 font-semibold text-white transition hover:bg-gray-800">

                        Back to Menu

                    </a>

                    <a
                        href="{{ route('reservation') }}"
                        class="rounded-lg bg-yellow-500 px-8 py-4 font-semibold text-black transition hover:bg-yellow-600">

                        Book a Table

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection