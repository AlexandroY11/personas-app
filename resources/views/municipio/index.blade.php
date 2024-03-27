@extends('layouts.plantilla')

@section('title', 'Municipios')

@section('content')

<h1>Municipality List</h1>
<a href="{{ route('municipios.create')}}" class="btn btn-success">Add</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Municipality</th>
        <th scope="col">Department</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $municipios as $municipio )
            <tr>
                <th scope="row">{{ $municipio->muni_codi }}</th>
                <td>{{ $municipio->muni_nomb }}</td>
                <td>{{ $municipio->depa_nomb }}</td>
                <td>
                    <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi])}}" method="POST" style="display: inline-block">
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
