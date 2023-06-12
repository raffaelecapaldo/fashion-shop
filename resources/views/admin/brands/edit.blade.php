@extends('layouts.admin.general')
@section('title', 'Edit brand')

@section('content')
<div class="main-content">
    <h1>Edit Project: {{ $brand->name }}</h1>
    <form action="{{ route('admin.brands.update', $brand->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                required maxlength="150" minlength="3" value="{{ old('name', $brand->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex">
            <div class="media me-4">
                <img id="uploadPreview" class="shadow" width="150"
                    src="{{ $brand->logo ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $brand->name }}">
            </div>
            <div class="mb-3">
                <label for="logo">Logo</label>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"
                    id="logo" maxlength="255" value="{{ old('logo', $brand->logo) }}">
                @error('logo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
@endsection
