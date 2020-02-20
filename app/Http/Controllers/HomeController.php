<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = DB::table('orders')
        ->join('address', 'orders.id_address', '=', 'address.id_address')
        ->where('invoice_date', date("Y-m-d"))
        ->paginate(10);

        return view('orders.index', compact('orders'));
    }
}
