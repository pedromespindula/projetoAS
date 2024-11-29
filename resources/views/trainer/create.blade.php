@extends('layouts.base')

@section('content')
<form action="{{ url('trainer') }}" method="POST">
    @csrf
    <div class="sm:col-span-4">
        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
        <div class="mt-2">
          <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>

        <div class="sm:col-span-4">
        <label for="rank" class="block text-sm/6 font-medium text-gray-900">Rank</label>
        <div class="mt-2">
          <input id="rank" name="rank" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
    <button type="submit">Create Trainer</button>
</form>
@endsection