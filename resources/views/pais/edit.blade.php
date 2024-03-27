@extends('layouts.plantilla')

@section('title', 'Edit Pais')

@section('content')

<h1>Edit Country {{$pais->pais_nomb}}</h1>

<form action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="pais_codi" value="{{$pais->pais_codi}}" pattern="[A-Za-z]{3}" maxlength="3" title="Por favor, ingrese exactamente tres letras.">

        <div id="idHelp" class="form-text">Country Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Country</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="pais_nomb" placeholder="Country Name" value="{{$pais->pais_nomb}}">
    </div>
    <div class="mb-3">
        <label for="pais" class="form-label">Department</label>
        <select class="form-select" name="pais_capi" id="pais" required>
            <option disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio)
                <option value="{{ $municipio->muni_codi }}" {{ $municipio->muni_codi == $pais->pais_capi ? 'selected' : '' }}>
                    {{ $municipio->muni_nomb }}
                </option>
            @endforeach
        </select>
        
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('paises.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection