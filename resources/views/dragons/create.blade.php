@extends('layouts.base')

@section('content')

<form action="{{ url('dragon') }}" method="POST" enctype='multipart/form-data'>
    @csrf
    <div class="sm:col-span-4">
        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
        <div class="mt-2">
          <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        
        <div class="sm:col-span-4">
        <label for="age" class="block text-sm/6 font-medium text-gray-900">Age</label>
        <div class="mt-2">
          <input id="age" name="age" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>

        <div class="sm:col-span-4">
        <label for="element" class="block text-sm/6 font-medium text-gray-900">element</label>
        <div class="mt-2">
          <input id="element" name="element" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>

        <div class="sm:col-span-4">
        <label for="image" class="block text-sm/6 font-medium text-gray-900">Image</label>
        <div class="mt-2">
          <input id="image" name="image" type="file" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
        </div>

        <label for="trainer_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trainer</label>
        <select id="trainer_id" name="trainer_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Escolha um treinador</option>
                @foreach($trainers as $trainer)
            <option value="{{ $trainer->id}}">{{ $trainer->name }}</option>
                @endforeach
        </select>

    <button type="submit">Create Dragon</button>
</form>
@endsection