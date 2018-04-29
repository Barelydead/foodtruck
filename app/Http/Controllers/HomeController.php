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

    /**
     *
     *
     */
    public function getTruckForm()
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();

        return view('forms.editTruckform', ['truck' => $trucks->where('user_id', $userId)->first()]);
    }

    /**
     * validate truck form and redirect to index
     * @return mixed
     */
    public function truckFormValidation(Request $request)
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();

        $trucks->insert([
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'website' => $request->website,
            'open' => $request->open,
            'user_id' => $userId
        ]);

        return redirect('/admin');
    }


    /**
     * validate truck form and redirect to index
     * @return mixed
     */
    public function validateEditTruckFormValidation(Request $request)
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();

        $trucks->where('user_id', $userId)->update([
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'website' => $request->website,
            'open' => $request->open
        ]);

        return redirect('admin')->with('status', 'Truck updated!');
    }
}
