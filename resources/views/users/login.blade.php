@extends("templates.login-base")

@section("main")
  <div class="custom-card bg-white px-5 py-2 mx-auto mt-5">
    <p class="mt-2 fs-3">Login</p>
  
    @include("templates.child.custom-input", [
      "id" => "name",
      "label" => "Masukan Username", 
      ])
    @include("templates.child.custom-input", [
      "id" => "password",
      "label" => "Masukan Password",
      "class" => "mb-1" 
    ])
    <button class="btn btn-dark mt-4 mb-2 circle" style="width: 100%">Login</button>
    <p class="mb-1 small">Belum Mempunyai Akun? <a href="{{ route("register-view") }}">Daftar disini</a></p>
    <small>Atau, Lanjut Dengan</small>     
    <div class="button-group d-md-flex my-2 align-items-center justify-content-around">
        <a href="{{ route("google-redirect") }}" class="d-block btn px-4 my-2 bi bi-google btn-danger circle text-decoration-none"> Google</a>
        <a href="#" class="d-block btn px-5 bi bi-facebook btn-primary circle my-2"> Facebook</a>    
        <a href="{{ route("github-redirect") }}" class="d-block btn px-4 bi bi-github btn-dark circle my-2"> Github</a>    
    </div>
  </div>

@endsection