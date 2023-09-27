<?php

namespace App\Http\Controllers;

use App\Models\Buku; // harus di import
use Illuminate\Http\Request;

class bukuController extends Controller
{
    //index
    public function index(){
        $data_buku = Buku::all()-> sortBy('id');
        $no = 0;
        // var_dump($data_buku); exit;
        return view('index', compact('data_buku','no'));
    }
    public function create(){
        return view('buku.create');
    }
    public function store(Request $request){
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_terbit' => $request->tgl_terbit,
            'harga' => $request->harga]);
        return redirect('/buku');
    }
    public function destroy($id){
        $buku = Buku::find($id);
        $buku ->delete();
        return redirect('/buku');
    }
    //edit
    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }
    // update
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_terbit' => $request->tgl_terbit,
            'harga' => $request->harga]);
        return redirect('/buku');
    }
}
