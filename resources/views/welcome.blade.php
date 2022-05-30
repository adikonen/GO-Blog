@extends('templates.main')

@section("main")
  <div class="row pt-3">
    <div class="col-md-7 me-2">
      @include("templates.user-post", ["created_at" => "15 menit yang lalu", "author" => "Nita", "postImage" => "test.jpg"])
      @include("templates.user-post",["created_at" => "1 jam yang lalu", "author" => "Puspa", "postImage" => "beach.jpg"])
    </div>
    <div class="col-md-4 bg-white p-4">
      <div class="top">
        <h5>Hal - hal yang mungkin Anda Sukai</h5>
        <ul class="list-group">
          <li class="list-group-item mb-2">An item</li>
          <li class="list-group-item mb-2 ">A second item</li>
          <li class="list-group-item mb-2">A third item</li>
          <li class="list-group-item mb-2">A fourth item</li>
          <li class="list-group-item mb-2">And a fifth one</li>
        </ul>
      </div>
      @lang('messages.welcome')
    </div>
  </div>
@endsection