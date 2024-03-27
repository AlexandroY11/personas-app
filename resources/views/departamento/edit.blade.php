@extends('layouts.plantilla')

@section('title', 'Edit Department')

@section('content')

<h1>Edit Department {{$departamento->muni_nomb}}</h1>

<form action="{{ route('departamentos.update', ['departamento' => $departamento->depa_codi]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$departamento->depa_codi}}">
        <div id="idHelp" class="form-text">Department Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Department</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="depa_nomb" placeholder="Department Name" value="{{$departamento->depa_nomb}}">
    </div>
    <div class="mb-3">
        <label for="pais" class="form-label">Department</label>
        <select class="form-select" name="pais_codi" id="pais" required>
            <option disabled value="">Choose one...</option>
            @foreach ($paises as $pais)
                <option value="{{ $pais->pais_codi }}" {{ $pais->pais_codi == $pais->pais_codi ? 'selected' : '' }}>
                    {{ $pais->pais_nomb }}
                </option>
            @endforeach
        </select>

    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('departamentos.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection