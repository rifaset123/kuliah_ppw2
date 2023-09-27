<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tabel Buku</title>
</head>
<body>
    <div class="container mt-4">
    <h1 align="center">Tambahkan Data Game</h1>
    <form method="POST" action="{{route('game.store')}}">
        @csrf
        <div class="form-group row mt-4">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Game</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Judul Game" name="nama_game">
          </div>
        </div>
        <div class="form-group row mt-4">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Developer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama Developer" name="developer">
          </div>
        </div>

        <div class="form-group row mt-4">
            <label for="tglRilis" class="col-sm-2 col-form-label">Tanggal Rilis</label>
            <div class="col-sm-10"> <input class="col-sm-2 col-form-label" type="date" name="tahun_rilis">
                <button  type="button" onclick="window.location = '/game'"
                class="btn btn-outline-danger float-end">Kembali</button>
                <button  type="submit" onclick="location.href='{{route('game.create')}}'"
                class="btn btn-outline-info float-end">Tambahkan Game</button>
            </div>
        </div>
      </form>
    </div>
</body>

