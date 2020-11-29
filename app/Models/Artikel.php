<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar;

class Artikel extends Model
{
	protected $table = "artikel";
	protected $fillable = ['id','user_id','judul','isi'];
    use HasFactory;

     public function komentar()
    {
       return $this->belongsTo(Komentar::class);
    }
}
