
@extends('layouts.admin.general')
@section('title', 'Brands List')

@section('content')
<div class="main-content">
    <img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
    <h1>{{ $brand->name }}</h1>
</div>

@endsection
