@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<div class="row" style="padding-bottom:50px;">
    <div class="col-md-3">
        <a href="{{ route('comunas.index') }}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comunas</h5>
                    <p class="card-text">En esta sección podrás ver, editar y eliminar las comunas registradas en el sistema. Las comunas son divisiones administrativas que generalmente corresponden a áreas urbanas más pequeñas que un municipio o una ciudad.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('municipios.index') }}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Municipios</h5>
                    <p class="card-text">Aquí podrás gestionar la información de los municipios. Los municipios son divisiones territoriales que pertenecen a una provincia o estado y suelen ser gobernados por un alcalde o intendente.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('departamentos.index') }}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Departamentos</h5>
                    <p class="card-text">Esta sección te permite administrar los departamentos registrados en el sistema. Los departamentos son divisiones administrativas de un país que suelen agrupar varios municipios.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('paises.index') }}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Países</h5>
                    <p class="card-text">Aquí encontrarás la lista de países disponibles en el sistema. Podrás ver, editar y eliminar información relacionada con cada país, como su nombre, código y capital.</p>
                </div>
            </div>
        </a>
    </div>
</div>


@endsection
