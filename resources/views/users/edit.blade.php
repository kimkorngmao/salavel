@extends('layouts.app') 
 
@section('title') Edit User @endsection

@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">Update User Information</h1>
        <a href="{{ route('users.index') }}" class="text-gray-900"><span>&larr;</span>Back</a>
    </div>
    <form action="{{route('users.update', ['user'=>$user])}}" method="POST">
        @csrf
        @method('put')

        <div class="mt-5">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
            <div class="mt-2.5">
              <input type="text" value="{{$user->name}}" name="name" id="name" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('name')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-5">
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="mt-2.5">
              <input type="email" value="{{$user->email}}" name="email" id="email" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('email')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-5">
            <label for="role" class="block text-sm font-semibold leading-6 text-gray-900">Role</label>
            <div class="mt-2.5">
                <select name="role" id="name" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student</option>
                    <option value="teacher" {{ $user->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit" class="block rounded-md bg-gray-900 px-5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-800">Update</button>
        </div>
     </form>
 </div>
@endsection 
