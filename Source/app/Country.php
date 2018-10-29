<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $guarded = ['id'];

    public static function getPopulation() {
        return self::select(['name as country_name', 'population'])->where('continent', 'asia')->where('population', '>', '100000000')->get();
    }
}
