<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('sell') }}">Pubblica annuncio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contattaci') }}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('sell_index') }}">Tutti gli annunci</a>
                </li>

            </ul>
            <ul class="ms-auto navbar-nav">
                @guest
                    <li>
                        <a class="nav-link active" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown dropstart">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Ciao {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
