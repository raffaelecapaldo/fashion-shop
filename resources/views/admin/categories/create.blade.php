@extends('layouts.admin.general')

@section('content')
<div class="main-content">
    <h1 class="px-3 py-3">Add new Category</h1>
    <form action="{{route('admin.categories.store')}}" method="POST">
    @csrf
        <div class="mb-3 px-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success ms-3">Save</button>
        <button type="reset" class="btn btn-danger ms-3">Reset</button>
    </form>
</div>
@endsection
