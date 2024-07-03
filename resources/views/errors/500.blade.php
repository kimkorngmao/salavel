@extends('layouts.base')

@section('title') 500 @endsection

@section('container')
<section class="bg-white">
    <div class="flex items-center px-6 py-12 mx-auto">
        <div>
            <p class="text-sm font-medium text-blue-500">500 error</p>
            <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">Unexpected error</h1>
            <p class="mt-4 text-gray-500">We are working on fixing the problem. Be back soon</p>

            <div class="flex items-center mt-6 gap-x-3">
                <a href="{{route("profile.show")}}" class="flex items-center leading-6 gap-1 w-1/2 px-5 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span>Take me home</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection