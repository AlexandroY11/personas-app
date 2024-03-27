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
                    <form action="{{ route('departamentos.destroy', ['departamento' => $departamento->depa_codi])}}" method="POST" style="display: inline-block">
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
