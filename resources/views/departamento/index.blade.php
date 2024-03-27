@extends('layouts.plantilla')

@section('title', 'Departamentos')

@section('content')

<h1>Department List</h1>
<a href="{{ route('departamentos.create')}}" class="btn btn-success">Add</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Department</th>
        <th scope="col">Country</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $departamentos as $departamento )
            <tr>
                <th scope="row">{{ $departamento->depa_codi }}</th>
                <td>{{ $departamento->depa_nomb }}</td>
                <td>{{ $departamento->pais_nomb }}</td>
                <td>
                    <span>Actions</span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
