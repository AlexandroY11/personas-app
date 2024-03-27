@extends('layouts.plantilla')

@section('title', 'Paises')

@section('content')

<h1>Country List</h1>
<a href="{{ route('paises.create')}}" class="btn btn-success">Add</a>
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
                    <span>Actions</span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection