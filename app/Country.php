<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $fillable = [
        'name',
        'short_code',
    ];

    /*public function state()
    {
        return $this->hasMany(State::class);
    }
*/
}
