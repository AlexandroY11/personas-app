@extends('layouts.plantilla')

@section('title', 'Comunas')

@section('content')

<h1>Commune List</h1>
<a href="{{ route('comunas.create')}}" class="btn btn-success">Add</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Commune</th>
        <th scope="col">Municipality</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $comunas as $comuna )
            <tr>
                <th scope="row">{{ $comuna->comu_codi }}</th>
                <td>{{ $comuna->comu_nomb }}</td>
                <td>{{ $comuna->muni_nomb }}</td>
                <td>
                    <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi])}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi])}}" method="POST" style="display: inline-block">
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
