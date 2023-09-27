<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tabel Buku</title>
</head>
<body>
<div class="container">
    <h3 class='mt-5' align='center'>Edit Data</h3>
    <form action="{{route('game.update',$games->id_game)}}" method="POST">
        @csrf
        <div class="form-group row mt-4">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Game</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_game" name="nama_game" placeholder="Masukkan Judul Game" value="{{$games->nama_game}}">
          </div>
        </div>
        <div class="form-group row mt-4">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Developer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="developer" name="developer" placeholder="Masukkan Nama Developer" value="{{$games->developer}}">
          </div>
        </div>
        <div class="form-group row mt-4">
            <label for="tglRilis" class="col-sm-2 col-form-label">Tanggal Rilis</label>
            <div class="col-sm-10"> <input class="col-sm-2 col-form-label" type="date" id="tahun_rilis" name="tahun_rilis" value="{{$games->tahun_rilis}}">
                <button  type="button" onclick="window.location = '/game'"
                class="btn btn-outline-danger float-end">Kembali</button>
                <button  type="submit" onclick="location.href='{{route('game.create')}}'"
                class="btn btn-outline-info float-end">Simpan Perubahan</button>
            </div>
        </div>
    </form>
    </div>
</body>
