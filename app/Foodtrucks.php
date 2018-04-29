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
}
