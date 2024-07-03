@extends('layouts.app')

@section('title') Edit Course @endsection

@section('content')
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">Edit Course</h1>
        <a href="{{ route('courses.index') }}" class="text-gray-900"><span>&larr;</span>Back</a>
    </div>

    @if ($errors->any())
        <div class="mt-4">
            <ul class="list-disc list-inside text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST" class="mt-5">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <textarea id="description" name="description" class="w-full mt-1 p-2 border border-gray-300 rounded-md">{{ old('description', $course->description) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="classroom_id" class="block text-gray-700">Classroom:</label>
            <select id="classroom_id" name="classroom_id" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}" {{ $course->classroom_id == $classroom->id ? 'selected' : '' }}>
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="teacher_id" class="block text-gray-700">Teacher:</label>
            <select id="teacher_id" name="teacher_id" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>
                        {{ $teacher->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <label for="price" class="mb-2 block text-sm font-semibold leading-6 text-gray-900">Price <span class="text-gray-500">(USD)</span></label>
            <input type="text" value="{{ $course->price }}" name="price" id="price" autocomplete="off" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('price')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-10">
            <button type="submit" class="bg-gray-900 py-1 px-4 rounded-md text-white">Update</button>
        </div>
    </form>
</div>
@endsection
