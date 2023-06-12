
@extends('layouts.admin.general')
@section('title', 'Show brand')

@section('content')
<div class="main-content">
    <div class="m-4 p-4">
        <h1>{{ $brand->name }}</h1>
        <img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
        @if (count($brand->products) > 0)
        <p>
            <h4>Prodotti appartenenti a questo brand:</h4>
            <ul class="fs-5">
                @foreach ($brand->products as $prod)
                    <li><a href="{{ route('admin.products.show', $prod->slug) }}">{{ $prod->name }}</a></li>
                @endforeach
            </ul>
        </p>
        @else
        <p class="fs-3 mt-4">Non esistono prodotti del catalogo che appartengono a questo brand!</p>
        @endif
    </div>
</div>

@endsection
