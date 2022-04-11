<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
        public function apiclients()
        {
            $client=client::all();
            return response()->json($clients);
        }
}
