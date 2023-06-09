@extends('layouts.admin.general')
@section('title', 'Categories List')

@section('content')
<div class="main-content">
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col" colspan="5" class="fs-3 text-center">Lista delle nostre categorie</th>
        </tr>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Data di creazione</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
<div class="d-flex justify-content-end gap-2 me-2">
    {{ $categories->links() }}
</div>
</div>

@endsection
