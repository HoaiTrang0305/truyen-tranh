<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;//set thoi gian false
    protected $fillable =[
        'tenbaiviet','tacgia','hinhanh','noidung','kichhoat','slug_baiviet','created_at','updated_at'
    ];
    protected $primarykey ='id';
    protected $table = 'blog';

}
