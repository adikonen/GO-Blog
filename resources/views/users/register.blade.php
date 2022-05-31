@extends("templates.login-base")

@section("main")
  <div class="custom-card bg-white px-5 py-2 mx-auto mt-5">
    <p class="mt-2 fs-3">Daftar</p>
  
    @include("templates.child.custom-input", [
      "id" => "name",
      "label" => "Masukan Username", 
      "class" => "my-3" 
    ])
    @include("templates.child.custom-input", [
      "id" => "password",
      "type" => "password",
      "label" => "Masukan Password",
      
    ])
    @include("templates.child.custom-input", [
      "id" => "email",
      "type" => "email",
      "label" => "Masukan Email"
    ])  
    <button class="btn btn-dark mt-4 mb-2 circle" style="width: 100%">Daftar</button>
    <p class="mb-1 small">Kembali <a href="{{ route("login") }}">Login</a></p>
@endsection