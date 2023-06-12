@extends('layouts.admin.general')
@section('content')
    <div class="main-content">
        <h1 class="py-2 text-center">{{$category->name}}</h1>
        <div class="table-responsive">
            <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product name</th>
                <th scope='col'>Preview image</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td><img class="img-thumbnail" style="width:7rem;" src="{{'http://127.0.0.1:8000/storage/' . $product->cover_image}}" alt=""></td>
                    <td>
                        @if($product->category_id)
                            {{ $product->category->name }}
                        @endif
                    </td>
                    </td>
                    <td><a href="{{ route('admin.products.show', $product->slug) }}"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.products.edit', $product->slug) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.products.destroy', $product->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button" data-item-title="{{ $product->title }}"> <i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>

    {{-- {{ $projects->links('vendor.pagination.bootstrap-5') }} --}}
@endsection
