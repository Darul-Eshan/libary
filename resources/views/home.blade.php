@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-b from-blue-50 via-white to-gray-50 overflow-hidden py-20 lg:py-28 px-4 sm:px-6 lg:px-8">
        <!-- Background Glow Effects -->
        <div class="absolute inset-0 z-0 opacity-40 pointer-events-none">
            <div class="absolute -top-10 -left-10 w-72 h-72 bg-blue-300 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 right-0 w-96 h-96 bg-indigo-200 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <!-- Badge -->
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 mb-6 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
            Smart Digital Library Platform
        </span>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
                Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">EduLibrary System</span>
            </h1>

            <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed mb-10">
                Explore thousands of books, manage your reservations effortlessly, and elevate your learning experience with our digital library platform.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="{{ route('reservation') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-700 shadow-lg hover:shadow-blue-500/30 transition-all duration-200">
                    Book Now
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#services" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border border-gray-300 text-base font-semibold rounded-xl text-gray-700 bg-white hover:bg-gray-50 shadow-sm hover:border-gray-400 transition-all duration-200">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Content / Services Section -->
    <div id="services" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Our Library Services</h2>
            <p class="mt-3 text-lg text-gray-500">Everything you need for an enriched reading and research experience.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 p-8 flex flex-col justify-between hover:-translate-y-1.5">
                <div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        📚
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Featured Books</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Discover the most popular reads and highly rated academic books available this week.</p>
                </div>
                <div>
                    <button class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors">
                        View List
                        <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 p-8 flex flex-col justify-between hover:-translate-y-1.5">
                <div>
                    <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        ⚡
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-amber-600 transition-colors">Fast Reservation</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Reserve your book online in minutes and pick it up at your convenience without waiting.</p>
                </div>
                <div>
                    <button class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors">
                        How it works
                        <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 p-8 flex flex-col justify-between hover:-translate-y-1.5">
                <div>
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        📅
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">Upcoming Events</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Join our reading clubs, author meetups, and academic workshops hosted every month.</p>
                </div>
                <div>
                    <button class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-800 transition-colors">
                        See Schedule
                        <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
