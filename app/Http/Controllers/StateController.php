<?php

namespace App\Http\Controllers;
use App\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
    //
    public function index()
    {
        $states = State::whereHas('country', function($query) {
                $query->whereId(request()->input('country_id', 0));
            })
            ->pluck('name', 'id');

        return response()->json($states);
    }


}
