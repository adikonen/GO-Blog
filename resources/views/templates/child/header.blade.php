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