@extends('templates.main')

@section("main")
  <div class="row pt-3">
    <div class="col-md-7 me-2">
      @include("templates.user-post", ["created_at" => "15 menit yang lalu", "author" => "Nita", "postImage" => "test.jpg"])
      @include("templates.user-post",["created_at" => "1 jam yang lalu", "author" => "Puspa", "postImage" => "beach.jpg"])
    </div>
    <div class="col-md-4 bg-white p-4 sticky-top" style="height: 100vh; overflow:auto">
      <div class="top mb-5">
        <h5 class="text-dark fw-bold">Hal - hal yang mungkin Anda Sukai</h5>
        <ul class="list-group">
          <li class="list-group-item mb-2">Web Programming</li>
          <li class="list-group-item mb-2 ">Mobile Development</li>
          <li class="list-group-item mb-2">Bermain gitar</li>
          <li class="list-group-item mb-2">Kuliner</li>
          <li class="list-group-item mb-2">Olahraga</li>
        </ul>
      </div>
      <div class="bottom">
        <h5 class="text-dark fw-bold">Mungkin Anda Tertarik Dengan Orang ini</h5>
        <ul class="list-group">
          <li class="list-group-item mb-4"><img class="user-icon-container rounded-circle" src="{{ url("cat.jpg") }}"> Sandhika Galih</li>
          <li class="list-group-item mb-4"><img class="user-icon-container rounded-circle" src="{{ url("test.jpg") }}"> A second item</li>
          <li class="list-group-item mb-4"><img class="user-icon-container rounded-circle" src="{{ url("user.jpg") }}"> A third item</li>
          <li class="list-group-item mb-4"><img class="user-icon-container rounded-circle" src="{{ url("beach.jpg") }}"> A fourth item</li>
          <li class="list-group-item mb-4"><img class="user-icon-container rounded-circle" src="{{ url("cat.jpg") }}"> And a fifth one</li>
        </ul>
      </div>
    </div>
  </div>
@endsection