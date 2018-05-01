<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $truck = $trucks->where('user_id', $userId)->first();

        $menuItems = DB::table('menuItems')->where('truck_id', $truck->id)->get();
        $categories = DB::table('menuCategory')->where('truck_id', $truck->id)->get();

        return view('home', [
            'truck' => $truck,
            'menuItems' => $menuItems,
            'menuCategories' => $categories
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
     *
     *
     */
    public function getMenuForm()
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();
        $truck = $trucks->where('user_id', $userId)->first();

        $menuItems = DB::table('menuItems')->where('truck_id', $truck->id)->get();
        $categories = DB::table('menuCategory')->where('truck_id', $truck->id)->get();

        return view('forms.menuform', [
            'menuItems' => $menuItems,
            'categories' => $categories
        ]);
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
    public function menuFormValidation(Request $request)
    {
        $userId = auth()->user()->id;
        $trucks = new Foodtrucks();
        $truck = $trucks->where('user_id', $userId)->first();

        if ($request->addCategory) {
            DB::table('menuCategory')->insert([
                'title' => $request->title,
                'truck_id' => $truck->id
            ]);
            return redirect('/admin/update/menu')->with('category', 'Category added');
        } elseif ($request->addMenuItem) {
            DB::table('menuItems')->insert([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'truck_id' => $truck->id
            ]);
            return redirect('/admin/update/menu')->with('item', 'Item successfully added');
        } elseif ($request->removeCategory) {
            DB::table('menuItems')->where('category_id', $request->category)->delete();
            DB::table('menuCategory')->where('id', $request->category)->delete();
            return redirect('/admin/update/menu')->with('remove', 'category removed');
        } elseif ($request->input('removeItem')) {
            DB::table('menuItems')->where('id', $request->input('removeItem'))->delete();
            return redirect('/admin/update/menu')->with('removeItem', 'item removed');
        }
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
