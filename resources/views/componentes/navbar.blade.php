<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand cinzel-decorative text-secondary" href="index.html">
            <img src="{{ asset('images/logo-original.png') }}" width="50" height="30" class="d-inline-block align-top" alt="">
            Exclusiva Isenções
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon text-secondary"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse roboto-condensed" id="conteudoNavbarSuportado">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item dropdown border-0">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Serviços
                </a>
                <div class="dropdown-menu border-0" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('servicos.oferecidos') }}">Isenção</a>
                    <a class="dropdown-item" href="{{ route('servicos.oferecidos') }}">Isenção de IPI</a>
                    <a class="dropdown-item" href="{{ route('servicos.oferecidos') }}">Inseção de ICMS</a>
                    <a class="dropdown-item" href="{{ route('servicos.oferecidos') }}">Inseção de IPVA</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Veículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('quem.somos') }}">Quem&nbspsomos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('quem.tem.direito') }}">Quem&nbsptem&nbspdireito</a>
            </li>

        </ul>
    </div>

</nav>
