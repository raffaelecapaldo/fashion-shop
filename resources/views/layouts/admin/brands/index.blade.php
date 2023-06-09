@extends('layouts.admin')

@section('content')
    <h1>I nostri</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Logo</th>
                <th scope="col">Data di creazione</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <th scope="row">{{ $brand->id }}</th>
                    <td>{{ $brand->name }}</td>
                    <td><img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
                    </td>
                    <td>{{ $brand->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.brands.show', $brand->slug) }}">Show</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
