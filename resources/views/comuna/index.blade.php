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
                    <button type="button" class="btn btn-danger me-3" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $comuna->comu_codi }}">
                        Delete
                    </button>
                </td>
            </tr>
            <!-- Modal Eliminar -->
            <div class="modal fade" id="confirmDeleteModal{{ $comuna->comu_codi }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ¿Estás seguro de que deseas eliminar la comuna <strong>{{$comuna->comu_nomb}}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi])}}" method="POST" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

@endsection
