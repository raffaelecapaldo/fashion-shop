
@extends('layouts.admin.general')
@section('title', 'Show brand')

@section('content')
<div class="main-content">
    <div class="m-4 p-4">
        <h1>{{ $brand->name }}</h1>
        <img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
    </div>
</div>

@endsection
