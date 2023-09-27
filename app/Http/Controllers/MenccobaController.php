<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenccobaController extends Controller
{
    public function boomesport(){ 
        return view('about', [
            "nama" => "XILFTEN",
            "jargon" => "Tonton semua anime favorit anda dengan kualitas terbaik!",]);
    }
}
