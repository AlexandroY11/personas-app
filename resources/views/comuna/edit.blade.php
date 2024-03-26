@extends('layouts.plantilla')

@section('title', 'Add Comuna')

@section('content')

<h1>Edit Commune {{$comuna->comu_nomb}}</h1>

<form action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Code</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Comune Code</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Commune</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="comu_nomb" placeholder="Commune Name">
    </div>
    <div class="mb-3">
        <label for="municipality" class="form-label">Municipality</label>
        <select class="form-select" name="muni_codi" id="municipality" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio )
                <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('comunas.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection