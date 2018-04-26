<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodtrucks extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'rating'
    ];

    /**
     * Get all trucks
     *
     * @return return array
     */
    public function getAll() {
        return $this->get();
    }
}
