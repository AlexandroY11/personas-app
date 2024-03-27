@extends('layouts.plantilla')

@section('title', 'Add Pais')

@section('content')

<h1>Add Country</h1>

<form action="{{ route('paises.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="pais_codi">
        <div id="idHelp" class="form-text">Country Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Country</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="pais_nomb" placeholder="Country Name">
    </div>
    <div class="mb-3">
        <label for="capital" class="form-label">Capital</label>
        <select class="form-select" name="pais_capi" id="capital" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio) 
                <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('paises.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection