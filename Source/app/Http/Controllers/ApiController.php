<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function population() {
        $population = Country::getPopulation();

        return $population;
    }
}
