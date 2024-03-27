@extends('layouts.plantilla')

@section('title', 'Edit Municipio')

@section('content')

<h1>Edit Municipality {{$municipio->muni_nomb}}</h1>

<form action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$municipio->muni_codi}}">
        <div id="idHelp" class="form-text">Municipality Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Municipality</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="muni_nomb" placeholder="Municipality Name" value="{{$municipio->muni_nomb}}">
    </div>
    <div class="mb-3">
        <label for="municipality" class="form-label">Department</label>
        <select class="form-select" name="depa_codi" id="municipality" required>
            <option disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->depa_codi }}" {{ $departamento->depa_codi == $municipio->depa_codi ? 'selected' : '' }}>
                    {{ $departamento->depa_nomb }}
                </option>
            @endforeach
        </select>
        
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('municipios.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection