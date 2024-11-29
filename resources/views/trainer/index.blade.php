@extends('layouts.base')

@section('content')
@foreach($trainers as $trainer)
    <div>
        <h3>{{ $trainer->name }}</h3>
        <p>{{ $trainer->rank }}</p>
        <a href="{{ url('trainer/'.$trainer->id.'/edit') }}">Edit</a>
        <form action="{{ url('trainer/'.$trainer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection