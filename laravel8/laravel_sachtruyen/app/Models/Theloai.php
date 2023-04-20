<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;//set thoi gian false
    protected $fillable =[
        'tentheloai','slug_theloai','mota','kichhoat'
    ];
    protected $primarykey ='id';
    protected $table = 'truyen';
}
