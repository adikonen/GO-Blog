<div class="box p-4 mb-5 border border-light">
    <div class="post-header my-2 d-flex justify-content-between">
        <div class="left d-flex">
            <img src="{{ url($userImage) }}" class="rounded-circle user-icon-container" alt="user">    
            <div class="mx-3">
                <h3>{{ $author }}</h3>
                <h6 class="text-muted">{{ $createdAt }}</h6>
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
        <img class="img-fluid" src="{{ url($postImage) }}" alt="testing">
    </div>
    <div class="post-description my-2 pb-3 ">
        <div class="d-flex my-2">
            <div class="btn bg-light p-2 me-2 like"><i class="bi bi-hand-thumbs-up-fill"></i> 860</div>
            <div class="btn bg-light p-2 me-2 comment"><i class="bi bi-chat-fill"></i> 20</div>
            <div class="btn bg-light p-2 me-2 share"><i class="bi bi-share-fill"></i></div>
        </div>
        {{-- mengambil hanya 70 karakter, dalam pembuatan sebuah postingan blog. Diperlukan 90 karakter lebih --}}
        <p>{{ $description }}</p>
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
                        <img src="{{ url($userImage) }}" class="rounded-circle user-icon-container" alt="user">    
                        <div class="mx-3">
                            <h3>{{ $author }}</h3>
                            <h6 class="text-muted">{{ $createdAt }}</h6>
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
@section("js")
    <script src="{{ url("js/comment-button.js") }}"></script>
@endsection