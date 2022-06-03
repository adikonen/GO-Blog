@extends("templates.main")

@section('main')
    <h1 class="mt-4 text-center text-danger">Buat Blog</h1>
    <form action="{{ route("store-post") }}" method="post" class="row mx-5 px-5 py-3 mt-3 bg-white" enctype="multipart/form-data">
        @csrf
        @include("templates.child.errors")
        @include("templates.child.success")
        <div class="title col-md-6">
            <label for="title">Masukan Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="category col-md-6">
            <label for="category">Pilih Kategori</label>
            <select name="post_category_id" id="post_category_id" class="form-select"> 
                <option value="1">travel</option>
                <option value="2">kuliner</option>
            </select>
        </div>
        <div class="description mt-2">
            <label for="description">Masukan Deskripsi</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control my-2"></textarea>
        </div>
        <div class="my-2">
            <label for="post-image">Masukan Foto (opsional)</label>
            <input type="file" class="form-control" name="post-image" id="post-image" aria-describedby="post-image" aria-label="Upload">
        </div>
        <button class="btn btn-danger col-md-2 mx-1 my-2">Buat Blog</button>
    </form>
@endsection