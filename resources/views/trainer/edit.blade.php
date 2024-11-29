@extends('layouts.base')

@section('content')
<form action="{{ url('trainer/' .$trainer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name"placeholder="Nome" value="{{$trainer->name }} "required">
    <input type="text" name="rank"placeholder="rank" value="{{$trainer->rank }} "required">
    <button type="submit">Edit Trainer</button>
</form>
@endsection