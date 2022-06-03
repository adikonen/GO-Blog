@extends("templates.main")

@section("main")
    @foreach($postCategories as $category)
        <table class="table table-striped">
            <thead>
                <th>No</th>
                <th>Nama</th>
                {{-- <th>Jumlah post</th> --}}
                <th>Aksi</th>
            </thead>
            <tbody>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td class="d-flex">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tbody>
        </table>
    @endforeach
@endsection