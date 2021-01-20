<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //

    protected $fillable = [
        'code',
        'name',
    ];




    public function cities()
    {
        return $this->belongsTo(City::class);
    }
}



