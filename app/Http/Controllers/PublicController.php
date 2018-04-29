<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Foodtrucks as Trucks;
use App\Maps\Geocode as Geo;

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

    public function getTruckDetails($id)
    {
        $trucks = new Trucks();
        $info = $trucks->where('id', $id)->first();
        $location = "$info->country+$info->city+$info->address";

        $geo = new Geo();

        return view('public.truckInfo', [
            'truck' => $info,
            'latLong' => $geo->getLatLong($location)
        ]);
    }
}
