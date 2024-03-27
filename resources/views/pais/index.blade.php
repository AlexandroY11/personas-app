@extends('layouts.plantilla')

@section('title', 'Paises')

@section('content')

<h1>Country List</h1>
<a href="{{ route('paises.create')}}" class="btn btn-success mb-3">Add</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Country</th>
        <th scope="col">Capital</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $paises as $pais )
            <tr>
                <th scope="row">{{ $pais->pais_codi }}</th>
                <td>{{ $pais->pais_nomb }}</td>
                <td>{{ $pais->muni_nomb }}</td>
                <td>
                    <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi])}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi])}}" method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection