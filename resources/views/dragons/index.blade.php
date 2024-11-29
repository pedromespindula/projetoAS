@extends('layouts.base')

@section('content')
@foreach($dragons as $dragon)
    <div class="container mx-auto">
    <img src = "{{ asset('storage/' . $dragon->image) }}" alt="fotododragao">
        <h3>{{ $dragon->name }}</h3>
        <p>{{ $dragon->age }}</p>
        <p>{{ $dragon->element }}</p>
        <p> Trainer: {{ $dragon->trainer->name }}</p>
        <a href="{{ url('dragon/'.$dragon->id.'/edit') }}">Edit</a>
        <form action="{{ url('dragon/'.$dragon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection