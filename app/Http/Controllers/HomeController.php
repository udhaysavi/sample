<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        //dump($request);

        $vendor_details = new Vendor;
        
        $vendor_details->vendor_name = $request->vendor_name;
        $vendor_details->email = $request->email;
        $vendor_details->phone = $request->phone;
        $vendor_details->address = $request->address;

        $vendor_details->save();

        return response($vendor_details, 200);
    }

}
