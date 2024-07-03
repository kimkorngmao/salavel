@extends('layouts.base') 

@section('title') Login @endsection

@section('container') 
 <div class="flex items-center justify-center p-6">
    <form action="{{route('authenticate')}}" method="post" class="w-full max-w-md p-4">
        @csrf
        
        <div>
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="mt-2.5">
              <input type="text" name="email" autocomplete="off" id="email" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('email')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Password</label>
            <div class="mt-2.5">
              <input type="password" name="password" id="password" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        @error('password')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
    </form>
 </div>
@endsection 
