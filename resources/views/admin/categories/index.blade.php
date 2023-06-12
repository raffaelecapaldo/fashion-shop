@extends('layouts.admin.general')

@section('content')
<div class="main-content">
    <h1 class="mb-3 p-3 ms-4">Category List</h1>
    <div class="text-end me-4 px-4">
        <a class="btn btn-success" href="{{ route('admin.categories.create') }}">Add new category</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row mt-3 px-5">
        @foreach ($categories as $category )
            <div class="col-3">
                <div class="card mb-3 py-2">
                    <div class="card-title text-center">
                        <a href="{{ route('admin.categories.show', $category->slug) }}" class="text-decoration-none fw-semibold">
                            {{$category->name}}
                        </a>
                    </div>
                    <div class="card-body text-center d-flex justify-content-center gap-2">
                        <a href="{{ route('admin.categories.edit', $category->slug) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button" data-item-title="{{ $category->name }}"> <i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
