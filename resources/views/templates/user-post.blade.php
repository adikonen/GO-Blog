<div class="box p-4 mb-5 border border-light">
    @include("templates.child.header",["userImage" => "user.jpg", "createdAt" => "10 menit yang lalu"])
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempore 
        uga rem porro repellat magni sapiente cum ratione minus nesciunt? Ut, rerum 
        atque repellat et est consequuntur non temporibus odio doloribus alias obcaecati
        sunt labore aliquam! Quas ullam quam delectus beatae omnis nam incidunt ex deleniti
        aperiam accusantium voluptate nostrum iste itaque eius atque, pariatur nihil, magnam
        cupiditate reprehenderit. Natus praesentium adipisci, ex, doloremque maxime saepe
        exercitationem quo quis illum qui voluptate eveniet placeat. Ab debitis excepturi
        fugit nulla illum iusto! Fugiat atque magni nemo dignissimos veritatis modi qui.
        Recusandae, possimus molestiae? Tempora repellendus omnis laborum, dolor voluptatibus
        aut consectetur?</p>
        <button class="btn btn-danger">Baca Selengkapnya</button>
    </div>
    <div class="cards hide" id = "2">
        <form class="bg-gray d-flex px-2 py-3 user-form">
            <img src="{{ url("cat.jpg") }}" alt="profile anda" class="user-icon-container rounded-circle">
            <input type="text" name="comment" id="" placeholder="Komentar disini..." class="mx-2 form-control circle">
            <button class="circle btn btn-danger flex-grow-1 bd-highlight">Komentar</button>
        </form>
        <div class="post-comments">
            <div class="comment-1 my-4">
                @include("templates.child.header",["userImage" => "test.jpg", "author" => "sely", "createdAt" => "10 detik yang lalu"])
                <p class="ms-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit voluptatum sequi ex soluta iure rem deserunt tenetur ducimus a?</p>
                <div class="d-flex my-2">
                    <div class="btn bg-light p-2 me-2 like"><i class="bi bi-hand-thumbs-up-fill"></i> 860</div>
                    <div class="btn bg-light p-2 me-2 comment"><i class="bi bi-chat-fill"></i> 20</div>
                    <div class="btn bg-light p-2 me-2 reply"><i class="bi bi-reply-fill"></i> Balas</div>
                </div>
            </div>
            <div class="comment-2 my-4">
                @include("templates.child.header", ["userImage" => "cat.jpg", "author" => "Anda", "createdAt" => "Baru Saja"])
                <p class="ms-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad tempore impedit nisi voluptatem pariatur perferendis, commodi eveniet, esse dolore vero libero hic suscipit officiis! Facilis temporibus itaque impedit perspiciatis quia autem cupiditate dolorum, doloribus suscipit illum? Saepe totam consequatur recusandae.</p>
            </div>
            <div class="d-flex my-2">
                    <div class="btn bg-light p-2 me-2 like"><i class="bi bi-hand-thumbs-up-fill"></i> 860</div>
                    <div class="btn bg-light p-2 me-2 comment"><i class="bi bi-chat-fill"></i> 20</div>
                    <div class="btn bg-light p-2 me-2 reply"><i class="bi bi-reply-fill"></i> Balas</div>
                </div>
        </div>
    </div>
</div>    
@section("js")
    <script src="{{ url("js/comment-button.js") }}"></script>
@endsection