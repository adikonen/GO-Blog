@if(session()->has("success-message"))
    <div class="alert alert-success">
        <h2>{{ $successTitlte ?? "Berhasil" }}</h2>
        <p>{{ session("success-message") }}</p>
    </div>
@endif