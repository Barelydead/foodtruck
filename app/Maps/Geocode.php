<?php

namespace App\Maps;

/**
 * A model class to access the google maps Geocode API
 *
 */
class Geocode
{

    private $apiKey = "AIzaSyCxJWowKDNK7yhJTHHJCDE_8-s60rmWcfI";
    private $apiUrl = "https://maps.googleapis.com/maps/api/geocode/json";



    /**
    *
    *
    */
    public function getLocationInfo($place)
    {
        $latlng = $this->getLatLong($place);
        $address = $this->getLocation($latlng["lat"], $latlng["lng"]);

        return [
            "geodata" => $latlng,
            "address" => $address
        ];
    }


    /**
    * Function @return array
    * @param str $place
    */
    public function getLatLong($place)
    {
        $maps_url = $this->apiUrl .
            "?address=" .
            urlencode($place) .
            '&key=AIzaSyDusJUypo_m6rIVGKACeB-yYQaD0LuRwlY';
        $maps_json = file_get_contents($maps_url);
        $maps_array = json_decode($maps_json, true);
        $lat = $maps_array['results'][0]['geometry']['location']['lat'];
        $lng = $maps_array['results'][0]['geometry']['location']['lng'];

        return [
            "lat" => $lat,
            "lng" => $lng
        ];
    }

    /**
    * Function @return string
    * @param decimal $lat
    * @param decimal $lng
    */
    public function getLocation($lat, $lng)
    {
        $maps_url = $this->apiUrl .
            "?latlng=" .
            $lat . "," . $lng .
            '&key=AIzaSyDusJUypo_m6rIVGKACeB-yYQaD0LuRwlY';
        $maps_json = file_get_contents($maps_url);
        $maps_array = json_decode($maps_json, true);

        $address = $maps_array['results'][0]['formatted_address'];

        return $address;

    }
}
