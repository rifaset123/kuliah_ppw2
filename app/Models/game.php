<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $table = 'game';
    protected $primaryKey = 'id_game';
    protected $fillable = [
        'nama_game',
        'developer',
        'tahun_rilis',
    ];
}
