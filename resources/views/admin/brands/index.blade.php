@extends('layouts.admin.general')
@section('title', 'Brands List')

@section('content')
<div class="main-content">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="5" class="fs-3 text-center">Lista dei nostri brands</th>
                </tr>
                <tr>
                    <th colspan="5" class="fs-3 text-center">
                        <a class="btn btn-primary text-white" href="{{ route('admin.brands.create') }}">Crea nuovo brand</a>
                    </th>
                </tr>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Logo</th>
                <th scope="col">Data di creazione</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($brands as $brand)
                    <tr>
                        <th scope="row">{{ $brand->id }}</th>
                        <td>{{ $brand->name }}</td>
                        <td><img class="img-thumbnail" style="width:100px" src="{{ $brand->logo }}" alt="{{ $brand->name }}">
                        </td>
                        <td>{{ $brand->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.brands.show', $brand->slug) }}">Show</a>
                            <a href="{{ route('admin.brands.edit', $brand->slug) }}">Edit</a>
                            <form action="{{ route('admin.brands.destroy', $brand->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn btn-danger text-white"
                                    data-item-title="{{ $brand->name }}"> <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h2>Nessun brand è stato memorizzato nel database locale!</h2>
                @endforelse

            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end gap-2 me-2">
        {{ $brands->links() }}
    </div>
    @include('partials.modal-delete')
</div>

@endsection
