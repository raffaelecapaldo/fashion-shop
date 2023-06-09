@extends('layouts.admin.general')
@section('title', 'Product List')

@section('content')
<div class="main-content">
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col" colspan="5" class="fs-3 text-center">Lista dei nostri prodotti</th>
        </tr>
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
            <td><img class="img-thumbnail" style="width:7rem;" src="{{'http://127.0.0.1:8000/storage/' . $product->cover_image}}" alt=""></td>
            <td>{{number_format($product->price, 2, ',')}}$</td>
          </tr>
        @empty

        @endforelse

    </tbody>
  </table>
</div>
<div class="d-flex justify-content-end gap-2 me-2">
    {{ $products->links() }}
</div>
</div>

@endsection
