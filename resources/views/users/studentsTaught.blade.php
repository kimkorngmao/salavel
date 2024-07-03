@extends('layouts.app') 

@section('title') My Students @endsection

@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">List of Your Students</h1>
    </div>

    @if (count($students) > 0)
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
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Joined
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$student->id}}
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$student->name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$student->email}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$student->created_at->format('Y-m-d')}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p class="mt-10 text-gray-600">You don't have any student yet.</p>
    @endif
</div>
@endsection 
