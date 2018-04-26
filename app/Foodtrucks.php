<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodtrucks extends Model
{
    public function getAll() {
        return $this->get();
    }
}
