@extends('templates.main')

@section("main")
  <div class="row pt-3">
    <div class="col-md-7 me-2">
      {{--  --}}
      @foreach($posts as $post)
        <div class="box p-4 mb-5 border border-light">
          <div class="post-header my-2 d-flex justify-content-between">
              <div class="left d-flex">
                  {{-- gambar sementara --}}
                  <img src="{{ url("user.jpg") }}" class="rounded-circle user-icon-container" alt="user">    
                  <div class="mx-3">
                      <h3>{{ $post->user->name }}</h3>
                      <h6 class="text-muted">{{ $post->createdAtCarbon }}</h6>
                  </div>
              </div>
              <div class="right">
                  <b type="button" id="threedots" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fs-3 bi bi-three-dots-vertical"></i>
                  </b>
                  <ul class="dropdown-menu" aria-labelledby="threedots">
                      <li><a class="dropdown-item" href="#">Laporkan</a></li>
                      <li><a class="dropdown-item" href="#">Tidak Tertarik</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
              </div>
          </div>
          <div class="post-image">
              <h3>{{ $post->title }}</h3>
              @if($post->image !== null)
                <img class="img-fluid" src="{{ url($post->image) }}" alt="testing">
              @endif
          </div>
          <div class="post-description my-2 pb-3 ">
              <div class="d-flex my-2">
                  <div class="btn bg-light p-2 me-2 like"><i class="bi bi-hand-thumbs-up-fill"></i> 860</div>
                  <div class="btn bg-light p-2 me-2 comment"><i class="bi bi-chat-fill"></i> 20</div>
                  <div class="btn bg-light p-2 me-2 share"><i class="bi bi-share-fill"></i></div>
              </div>
              {{-- mengambil hanya 70 karakter, dalam pembuatan sebuah postingan blog. Diperlukan 90 karakter lebih --}}
              <p>{{ $post->description }}</p>
              <button class="btn btn-danger">Baca Selengkapnya</button>
          </div>
          {{-- comments section --}}
          <div class="cards hide" id = "2">
              <form class="bg-gray d-flex px-2 py-3 user-form">
                  <img src="{{ url("cat.jpg") }}" alt="profile anda" class="user-icon-container rounded-circle">
                  <input type="text" name="comment" id="" placeholder="Komentar disini..." class="mx-2 form-control circle">
                  <button class="circle btn btn-danger flex-grow-1 bd-highlight">Komentar</button>
              </form>
              <div class="post-comments">
                  <div class="comment-1 my-4">
                      {{-- <div class="post-header my-2 d-flex justify-content-between">
                          <div class="left d-flex">
                              <img src="{{ url($post) }}" class="rounded-circle user-icon-container" alt="user">    
                              <div class="mx-3">
                                  <h3>{{ $post }}</h3>
                                  <h6 class="text-muted">{{ $post }}</h6>
                              </div>
                          </div>
                          <div class="right">
                              <b type="button" id="threedots" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fs-3 bi bi-three-dots-vertical"></i>
                              </b>
                              <ul class="dropdown-menu" aria-labelledby="threedots">
                                  <li><a class="dropdown-item" href="#">Laporkan</a></li>
                                  <li><a class="dropdown-item" href="#">Tidak Tertarik</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                          </div>
                      </div> --}}
                      <p class="ms-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit voluptatum sequi ex soluta iure rem deserunt tenetur ducimus a?</p>
                      <div class="d-flex my-2">
                          <div class="btn bg-light p-2 me-2 like"><i class="bi bi-hand-thumbs-up-fill"></i> 860</div>
                          <div class="btn bg-light p-2 me-2 comment"><i class="bi bi-chat-fill"></i> 20</div>
                          <div class="btn bg-light p-2 me-2 reply"><i class="bi bi-reply-fill"></i> Balas</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>  
    @endforeach  
      {{--  --}}
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
@section("js")
    <script src="{{ url("js/comment-button.js") }}"></script>
@endsection