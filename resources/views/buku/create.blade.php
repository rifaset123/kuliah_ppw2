{{-- @extends('layouts.master') --}}


    <div class="container">
        <h4>Tambah Buku</h4>
        <form method="POST" action="{{route('buku.store')}}">
            @csrf
            <div>Judul <input type="text" name="judul"></div>
            <div>Penulis <input type="text" name="penulis"></div>
            <div>Harga <input type="text" name="harga"></div>
            <div>Tanggal Terbit <input type="text" name="tgl_terbit"></div>
            <div><button type="submit">Simpan Pembaruan</button></div>
            <a href="/buku">Batal</a>
        </form>
    </div>

