<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Customers;
use App\Address;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = DB::table('customers')->paginate(10);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $languages = DB::table('language')->get();
      $states = DB::table('state')->get();
        return view('customers.create', compact('languages', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'firstname' => 'required|max:255',
           'lastname' => 'required|max:255',
           'email' => 'required|max:150',
           'phone' => 'required|max:11',
           'address' => 'required|max:128',
           'city' => 'required|max:128',
           'zipcode' => 'required|max:11'
        ]);

        if ($validator->fails()) {
            return redirect('customers/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $isInsertAddress = Address::create([
          'id_state' => $request->state,
          'address' => $request->address,
          'city' => $request->city,
          'zipcode' => $request->zipcode,
          'active' => 1,
          'deleted' => 0
        ]);

        $address = DB::table('address')
        ->select('id_address')
        ->where('address', $request->address)
        ->where('zipcode', $request->zipcode)
        ->first();

        $isInsertCustomer = Customers::create([
          'id_lang' => $request->lang,
          'id_address' => $address->id_address,
          'is_guest' => $request->guest,
          // 'secure_key' => $request->_token,
          'first_name' => $request->firstname,
          'last_name' => $request->lastname,
          'email' => $request->email,
          'phone' => $request->phone
        ]);

        if ($isInsertAddress == true && $isInsertCustomer == true) {
          return redirect('customers')->with('Customer saved!');
        } else {
          return redirect('customers')->with('Customer error insert, check form');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = DB::table('customers')
          ->where('id_customer', $id)
          ->first();

        $lang = DB::table('language')
          ->select('name')
          ->where('id_language', $customer->id_lang)
          ->first();

        $address = DB::table('address')
          ->where('id_address', $customer->id_address)
          ->first();

        $orders = DB::table('orders')
          ->join('address', 'orders.id_address', '=', 'address.id_address')
          ->where('id_customer', $customer->id_customer)
          ->get();

        return view('customers.details', compact('customer', 'lang', 'address', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = DB::table('customers')
          ->where('id_customer', $id)
          ->first();

        DB::table('customers')
          ->where('id_customer', $id)
          ->delete();

        DB::table('address')
            ->where('id_address', $customer->id_address)
            ->delete();

        return redirect('customers')->with('Customer removed');
    }
}
