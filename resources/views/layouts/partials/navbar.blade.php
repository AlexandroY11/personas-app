<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom box-shadow mb-3">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Personas-App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comunas.index')}}">Communes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('municipios.index')}}">Municipalities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departamentos.index')}}">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comunas.index')}}">Countries</a>
                </li>
            </ul>
        </div>
    </div>
</nav>