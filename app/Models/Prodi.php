<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Prodi extends Model
{ 
    use HasFactory;
    public $timestamps = false;
    protected $table = 'prodi';
    protected $fillable = ['kode', 'nama'];

}

