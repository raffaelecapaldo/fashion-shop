@extends('layouts.admin')
@section('content')
    <h1>{{ $brand->name }}</h1>
    <img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
@endsection
