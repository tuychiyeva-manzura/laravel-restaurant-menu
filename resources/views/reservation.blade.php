@extends('layouts.app')

@section('title', 'Reservation | Restaurant Menu')

@section('content')

<section class="bg-stone-100 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <h1 class="text-5xl font-bold text-gray-900">
                Reserve Your Table
            </h1>

            <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                Enjoy an unforgettable dining experience. Fill out the form
                below to reserve your table quickly and easily.
            </p>

        </div>

        <div class="grid gap-12 lg:grid-cols-2">

            <!-- Left Side -->
            <div>

                <img
                    src="https://picsum.photos/800/700?restaurant"
                    alt="Reservation"
                    class="h-full w-full rounded-2xl object-cover shadow-xl">

            </div>

            <!-- Right Side -->
            <div class="rounded-2xl bg-white p-10 shadow-xl">

                <form class="space-y-6">

                    <div>
                        <label class="mb-2 block font-semibold">
                            Full Name
                        </label>

                        <input
                            type="text"
                            placeholder="Enter your full name"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">
                    </div>

                    <div>
                        <label class="mb-2 block font-semibold">
                            Email Address
                        </label>

                        <input
                            type="email"
                            placeholder="example@email.com"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">
                    </div>

                    <div>
                        <label class="mb-2 block font-semibold">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            placeholder="+998 90 123 45 67"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">

                        <div>
                            <label class="mb-2 block font-semibold">
                                Reservation Date
                            </label>

                            <input
                                type="date"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">
                        </div>

                        <div>
                            <label class="mb-2 block font-semibold">
                                Reservation Time
                            </label>

                            <input
                                type="time"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">
                        </div>

                    </div>

                    <div>

                        <label class="mb-2 block font-semibold">
                            Number of Guests
                        </label>

                        <select
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500">

                            <option>1 Person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                            <option>6+ People</option>

                        </select>

                    </div>

                    <div>

                        <label class="mb-2 block font-semibold">
                            Special Request
                        </label>

                        <textarea
                            rows="5"
                            placeholder="Write your request..."
                            class="w-full resize-none rounded-lg border border-gray-300 px-4 py-3 outline-none transition focus:border-yellow-500"></textarea>

                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-lg bg-yellow-500 py-4 text-lg font-bold text-black transition hover:bg-yellow-600">

                        Reserve Now

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection