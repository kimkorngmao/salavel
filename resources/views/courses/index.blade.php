@extends('layouts.app') 

@section('title') Courses @endsection
 
@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">All courses</h1>
        <a href="{{route('courses.create')}}" class="bg-gray-900 py-1 px-4 rounded-md text-white">Create</a>
    </div>

    @if (session('success'))
    <div class="bg-green-100 text-green-600 py-1 px-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg z-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Room
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teach By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$course->id}}
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$course->name}}
                    </td>
                    <td class="px-6 py-4 line-clamp-1 max-h-10 w-60">
                        {{$course->description}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$course->classroom->name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$course->teacher->name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${{$course->price}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$course->created_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$course->updated_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{route('courses.edit',  $course->id)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                        <form action="{{route('courses.destroy',  $course->id)}}" method="post">
                            @csrf @method('delete')
                            <button class="font-medium text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 