<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\game;
class GameController extends Controller
{
    public function store(){
        $games = game::all()->sortBy('id_game');
        $no = 0;
        return view('store',compact('games', 'no'));
    }
    #pembuatan CREATE
    public function create(){
        return view('game.create');
    }
    public function list(Request $request){
        Game::create([
            'nama_game' => $request->nama_game,
            'developer' => $request->developer,
            'tahun_rilis' => $request->tahun_rilis]);
        return redirect('/game');
    }
    //edit
    public function edit($id_game){
        $games = game::find($id_game);
        return view('game.edit', compact('games'));
    }
    //update
    public function update(Request $request, $id_game){
        $games = game::find($id_game);
        $games->update([
            'nama_game' => $request->nama_game,
            'developer' => $request->developer,
            'tahun_rilis' => $request->tahun_rilis]);
            return redirect('/game');
        }
    //delete
    public function destroy($id_game){
        $games = game::find($id_game);
        $games -> delete();
        return redirect('/game');
    }

}

