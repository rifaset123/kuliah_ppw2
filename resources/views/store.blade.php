<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Game Store</title>
</head>
<body>
    <div class="container">
        <h1 class="display" align='center'>DAFTAR GAME</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Game</th>
                <th>Developer</th>
                <th>Tanggal Rilis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $g)
                <tr>
                    <td>{{ ++$no}}</td>
                    <td>{{ $g->nama_game}}</td>
                    <td>{{ $g->developer}}</td>
                    <td>{{date('d/m/y', strtotime($g->tahun_rilis))}}</td>
                    <td><button type="button" onclick="location.href='{{route('game.edit', $g->id_game)}}'"
                        class="btn btn-outline-success">Edit Data</button>
                        <form action="{{ route('game.destroy', $g->id_game) }}" method="post">
                            @csrf
                            <button class="btn btn-outline-danger"
                            onclick="return confirm('yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <button  type="button" onclick="location.href='{{route('game.create')}}'"
                 class="btn btn-outline-info float-end">Tambahkan Game</button>

    </div>
</body>
</html>
