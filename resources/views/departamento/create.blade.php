@extends('layouts.plantilla')

@section('title', 'Add Departamento')

@section('content')

<h1>Add Department</h1>

<form action="{{ route('departamentos.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Department Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Department</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="depa_nomb" placeholder="Department Name">
    </div>
    <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <select class="form-select" name="pais_codi" id="department" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($paises as $pais) 
                <option value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('departamentos.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection