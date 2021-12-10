<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabelhasil extends Model
{
    protected $fillable = [
        'result_id',
        'kode',
        'hasil',
    ];
    use HasFactory;

    public function Result(){
        return $this->belongsTo(Result::class);
    }
}
