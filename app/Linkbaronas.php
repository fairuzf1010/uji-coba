<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkbaronas extends Model
{
    //

    protected $fillable = [
        'email', 'kategori', 'judul_video' , 'deskripsi_video' , 'link_video' ,
    ];


}
