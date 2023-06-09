@extends('layouts.admin.general')
@section('title', 'Product List')

@section('content')
<div class="table-responsive">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Product name</th>
        <th scope="col">Preview image</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td><img class="img-thumbnail" src="{{$product->image}}" alt=""></td>
            <td>{{$product->price}}</td>
          </tr>
        @empty

        @endforelse

    </tbody>
  </table>
</div>
@endsection
