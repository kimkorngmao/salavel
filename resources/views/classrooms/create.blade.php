@extends('layouts.app') 

@section('title') Create Classroom @endsection
 
@section('content') 
 <div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">Create New Classroom</h1>
        <a href="{{ route('classrooms.index') }}" class="text-gray-900"><span>&larr;</span>Back</a>
    </div>
    <form action="{{route('classrooms.store')}}" method="POST">
        @csrf
        @method('post')

        <div class="mt-5">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
            <div class="mt-2.5">
              <input type="text" name="name" id="name" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('name')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-5">
            <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
            <div class="mt-2.5">
              <input type="text" name="description" id="description" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('description')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-10">
            <button type="submit" class="block rounded-md bg-gray-900 px-5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-800">Create</button>
        </div>
     </form>
 </div>
@endsection 
