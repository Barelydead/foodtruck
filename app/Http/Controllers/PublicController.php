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
        $trucks = new Trucks();
        $coList = $trucks->getCoordinatesList();


        return view('public.map', [
            'coordinates' => $coList,
        ]);
    }

    public function getTruckDetails($id)
    {
        $trucks = new Trucks();
        $info = $trucks->where('id', $id)->first();
        $location = "$info->country+$info->city+$info->address";
        $geo = new Geo();

        $categories = DB::table('menuCategory')->where('truck_id', $id)->get();
        $items = DB::table('menuItems')->where('truck_id', $id)->get();

        return view('public.truckInfo', [
            'truck' => $info,
            'latLong' => $geo->getLatLong($location),
            'categories' => $categories,
            'items' => $items
        ]);
    }


    public function getJsonCoordinates()
    {
        $trucks = new Trucks();
        $coList = $trucks->getCoordinatesList();

        return $coList;
    }
}
