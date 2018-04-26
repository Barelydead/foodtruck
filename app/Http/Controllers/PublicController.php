<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function getHome()
    {
        $trucks = DB::table('foodtruck')->get();
        return view("public.home", [
                'trucks' => $trucks
            ]);
    }
}
