@extends('layouts.plantilla')

@section('title', 'Add Municipio')

@section('content')

<h1>Add Municipality</h1>

<form action="{{ route('municipios.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Municipality Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Municipality</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="muni_nomb" placeholder="Municipality Name">
    </div>
    <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <select class="form-select" name="depa_codi" id="department" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamento) 
                <option value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('municipios.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection