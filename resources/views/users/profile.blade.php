@extends('layouts.app') 

@section('title') Profile @endsection

@section('content') 
    <div class="p-6 rounded-lg border border-gray-200">
        <h2 class="text-lg text-gray-900 font-semibold">Profile information</h2>

        <div class="mt-5">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
            <div class="mt-2.5">
              <input type="text" name="name" id="name" value="{{auth()->user()->name}}" disabled autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="mt-5">
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="mt-2.5">
              <input type="email" name="email" id="email" value="{{auth()->user()->email}}" disabled autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="mt-5">
            <label for="joined" class="block text-sm font-semibold leading-6 text-gray-900">Joined</label>
            <div class="mt-2.5">
              <input type="text" name="joined" id="joined" value="{{auth()->user()->created_at->format('Y-m-d')}}" disabled class="cursor-not-allowed block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
    </div>

    <form action="{{route('users.changePassword')}}" method="POST" class="p-6 rounded-lg border border-gray-200 mt-10">
        @csrf
      
        <h2 class="text-lg text-gray-900 font-semibold">Change Passsword</h2>
        
        @if (session('success'))
        <div class="mt-5 rounded bg-green-100 text-green-600 py-1 px-4">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
            <div class="mt-5 rounded bg-red-100 text-red-600 py-1 px-4">
                {{ session('error') }}
            </div>
        @endif
        <div class="mt-5">
            <label for="current_password" class="block text-sm font-semibold leading-6 text-gray-900">Old Password</label>
            <div class="mt-2.5">
              <input type="text" name="current_password" id="current_password" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('current_password')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-5">
            <label for="new_password" class="block text-sm font-semibold leading-6 text-gray-900">New Password</label>
            <div class="mt-2.5">
              <input type="text" name="new_password" id="new_password" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('new_password')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-7">
            <button type="submit" class="bg-gray-800 text-white px-4 py-1.5 rounded-lg">Change</button>
        </div>
    </form>
@endsection 
