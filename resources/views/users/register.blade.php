@extends("templates.login-base")

@section("main")
  <form class="custom-card bg-white px-5 py-2 mx-auto mt-5" method="post" action="{{ route("register") }}">
    @csrf
    <h4 class="mt-2 fs-3 text-center">Daftar dirimu di <p class="text-danger fw-bold">GO-Blog</p></h4>
    @include("templates.child.errors")
    @include("templates.child.custom-input", [
      "id" => "name",
      "label" => "Masukan Nama", 
      "class" => "mt-1 mb-3" ,
    ])
    @include("templates.child.custom-input", [
      "id" => "password",
      "type" => "password",
      "label" => "Masukan Kata Sandi",
      "value" => ""
    ])
    @include("templates.child.custom-input", [
      "id" => "email",
      "type" => "email",
      "label" => "Masukan Email",
      "value" => "ed"
    ])  
    <button class="btn btn-dark mt-4 mb-2 circle" style="width: 100%">Daftar</button>
    <p class="mb-1 small">Kembali <a href="{{ route("login") }}">Login</a></p>
  </form>
@endsection