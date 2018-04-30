<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Maps\Geocode;

class Foodtrucks extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'rating',
        'created_at',
        'updated_at'
    ];

    /**
     * Get all trucks
     *
     * @return return array
     */
    public function getAll() {
        return $this->get();
    }

    /**
     * Get coordinates of all trucks
     *
     * @return return array
     */
    public function getCoordinatesList() {
        $trucks = $this->get();
        $geo = new Geocode();
        $coordinateList = [];

        foreach ($trucks as $index => $truck) {
            $coordinates = $geo->getLatLong("$truck->country+$truck->city+$truck->address");
            $coordinates['name'] = $truck->name;
            $coordinates['id'] = $truck->id;

            array_push($coordinateList, $coordinates);
        }

        return $coordinateList;
    }
}
