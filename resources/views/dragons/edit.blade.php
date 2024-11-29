@extends('layouts.base')

@section('content')
<form action="{{ url('dragon/' .$dragon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name"placeholder="Nome" value="{{$dragon->name }} "required">
    <input type="text" name="age"placeholder="Age" value="{{$dragon->age }} "required">
    <input type="text" name="element"placeholder="Element" value="{{$dragon->element }} "required">
    <button type="submit">Edit Dragon</button>
</form>
@endsection