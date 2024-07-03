@extends('layouts.app') 

@section('title') Enrolling @endsection

@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">Create New Enrollment</h1>
        <a href="{{ route('enrollments.index') }}" class="text-gray-900"><span>&larr;</span> Back</a>
    </div>
    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf

        <div class="mt-5">
            <label for="student_id" class="block text-sm font-semibold leading-6 text-gray-900">Student</label>
            <div class="mt-2.5">
                <select name="student_id" id="student_id" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="">Select Student</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('student_id')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-5">
            <label for="course_id" class="block text-sm font-semibold leading-6 text-gray-900">Course</label>
            <div class="mt-2.5">
                <select name="course_id" id="course_id" class="block w-full rounded-md border-0 outline-none px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="">Select Course</option>
                    @foreach ($courses as $course)
                        <option data-price="{{$course->price}}" value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('course_id')
            <div class="text-sm text-red-500 mt-2 mb-5 font-medium">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-5">
            <p id="coursePrice" class="text-sm text-gray-700">Course Price: <span id="priceDisplay"></span>0 USD</p>
        </div>

        <div class="mt-10">
            <button type="submit" class="block rounded-md bg-gray-900 px-5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-800">Create</button>
        </div>
    </form>
</div>

<script>
    const courseSelect = document.getElementById('course_id');

    courseSelect.onchange = ()=>{
        updateCoursePrice();
    }

    function updateCoursePrice() {
        const selectedOption = courseSelect.options[courseSelect.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        const priceDisplay = document.getElementById('priceDisplay');
        priceDisplay.textContent = price ? price : '0';
    }
</script>
@endsection
