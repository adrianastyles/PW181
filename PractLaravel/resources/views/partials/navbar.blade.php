<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Diario Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodoinicio')?'text-danger fw-bold':''}}" aria-current="page" href="{{ route('apodoinicio')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodoformulario')?'text-primary fw-bold':''}}" href="/form">Formulario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodorecuerdos')?'text-warning fw-bold':''}}" href="/memories">Memories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>