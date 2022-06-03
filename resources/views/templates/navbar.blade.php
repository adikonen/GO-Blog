<nav class="navbar navbar-expand-lg navbar-light bg-danger" style="width: 100vw">
  <div class="container-fluid container">
    <a class="navbar-brand fw-bold text-white" href="#">GO-Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route("create-post") }}">Buat Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route("logout") }}">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("index-post-categories") }}" aria-current="page">Buat Kategori</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>