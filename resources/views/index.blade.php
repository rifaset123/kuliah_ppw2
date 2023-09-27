<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tabel Buku</title>
</head>
<body>
    <p align='right'><a href="{{route('buku.create')}}">Tambah Buku</a></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>judul buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id}}</td>
                    <td>{{ $buku->judul}}</td>
                    <td>{{ $buku->penulis}}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                    <td>{{date('d/m/y', strtotime($buku->tgl_terbit))}}</td>
                    <td><form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button
                        onclick="return confirm('yakin mau dihapus?')">Hapus</button>
                    </form>
                        <a href="{{ route('buku.edit', $buku->id) }}">Edit</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
