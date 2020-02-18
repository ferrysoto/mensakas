<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
      $customers = DB::table('customers')->get();
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
        // dd((int)$request->state);
        $isInsertAddress = DB::table('address')
          ->insert([
            ['id_state' => (int)$request->state],
            ['address' => $request->address],
            ['city' => $request->city],
            ['zipcode' => $request->zipcode],
            ['active' => 1],
            ['deleted' => 0]
          ]);

          $id_address = DB::table('address')
                ->select('id_address')
                ->where('address', $request->address)
                ->where('zipcode', $request->zipcode)
                ->first();

          $isInsertCustomer = DB::table('customers')
            ->insert([
              ['id_lang' => 1],
              ['id_address' => (int)$id_address],
              ['is_guest' => (int)$request->guest],
              ['secure_key' => $request->_token],
              ['first_name' => $request->firstname],
              ['last_name' => $request->lastname],
              ['email' => $request->email],
              ['phone' => $request->phone]
            ]);

            dd($isInsertAddress);

            if ($isInsertAddress == 1 && $isInsertCustomer == 1) {
              return back()->with('Customer saved!');
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
        //
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
        //
    }
}
