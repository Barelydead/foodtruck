<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodtrucks as Foodtrucks;
use App\Users as Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();

        return view('home', [
            'truck' => $trucks->where('user_id', $userId)->first()
        ]);
    }
}
