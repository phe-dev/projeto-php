<nav class="navbar navbar-expand-lg" style="background-color: #22b8cf;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Países e Regioes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Exibir</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tabelas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="lista_paises.php">Paises</a></li>
                <li><a class="dropdown-item" href="lista_regioes.php">Regioes</a></li>
            </ul>
        </ul>
        <form class="d-flex" role="search" method="post" action="busca2.php">
            <input class="form-control me-2 " type="search" placeholder="Pesquisar em Acesso Rápido" name="pais" aria-label="Search">
            <button class="btn btn-outline-primary " type="submit">Pesquisar</button>
        </form>
        </div>
    </div>
    </nav>