<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Foodtrucks as Trucks;

class PublicController extends Controller
{
    public function getHome()
    {
        return view("public.home");
    }


    public function getTrucks()
    {
        $trucks = new Trucks();

        return view("public.trucks", [
            "trucks" => $trucks->getAll(),
        ]);
    }


    public function getMap()
    {
        return view("public.map");
    }
}
