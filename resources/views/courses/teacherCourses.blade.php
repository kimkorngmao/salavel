@extends('layouts.app') 

@section('title') My Courses @endsection
 
@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">List of Your Courses</h1>
    </div>
    <div class="mt-6"> 
        <dl class="divide-y divide-gray-100">
            @foreach ($courses as $course)
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Course (ID={{$course->id}})</dt>
                <dd class="mt-1 text-sm leading-6 sm:col-span-2 sm:mt-0">
                    <div class="text-gray-900 font-medium">{{$course->name}}</div>
                    <div class="text-gray-700">{{$course->description}}</div>
                </dd>
            </div>
            @endforeach
        </dl>   
    </div>
</div>
@endsection 
