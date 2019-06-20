<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TManager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="gestion_utilisateurs.php" role="button" aria-haspopup="true" aria-expanded="false">
            Utilisateurs
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="gestion_utilisateurs.php">Ajouter</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">Modifier</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Statistiques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tickets</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>