@if ($errors->any())
    <div class="alert alert-danger">
        <h5 class="text-center">{{ $errorTitle ?? "Kesalahan" }}</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 