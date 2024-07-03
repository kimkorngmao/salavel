@extends('layouts.app') 

@section('title') Users @endsection

@section('content') 
<div class="p-6 rounded-lg border border-gray-200">
    <div class="flex items-center justify-between border-b pb-5">
        <h1 class="text-lg text-gray-900 font-semibold">All users</h1>
        <a href="{{route('users.create')}}" class="bg-gray-900 py-1 px-4 rounded-md text-white">Create</a>
    </div>

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
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Joined
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
                @foreach ($users as $user)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$user->id}}
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$user->name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$user->role}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$user->created_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$user->updated_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{route('users.edit', ['user'=>$user])}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                        <form action="{{route('users.destroy', ['user'=>$user])}}" method="post">
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
