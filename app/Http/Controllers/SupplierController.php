<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Suppliers;
use App\Suppliers_categories;
use App\Suppliers_categories_lang;
use App\Address;
use App\Products;
use App\Products_lang;

use DB;

class SupplierController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $suppliers = DB::table('suppliers')->paginate(10);
      return view('suppliers.index', compact('suppliers'));
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
      return view('suppliers.create', compact('languages', 'states'));
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
         'name' => 'required|max:100',
         'email' => 'required|max:150',
         'phone' => 'required|max:11',
         'address' => 'required|max:128',
         'city' => 'required|max:128',
         'zipcode' => 'required|max:11'
      ]);

      if ($validator->fails()) {
          return redirect('suppliers/create')
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

      $isInsertSupplier = Suppliers::create([

        'id_address' => $address->id_address,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'active' => 1,
        'id_category_supplier' => 1,

      ]);


      if ($isInsertAddress == true && $isInsertSupplier == true) {
        return redirect('suppliers')->with('supplier saved!');
      } else {
        return redirect('suppliers')->with('supplier error insert, check form');
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
      $supplier = DB::table('suppliers')
        ->where('id_supplier', $id)
        ->first();


      $address = DB::table('address')
        ->where('id_address', $supplier->id_address)
        ->first();

      $products = DB::table('products')
        ->where('id_supplier', $id)
        ->get();

      // $productName = DB::table('products_lang')
      //   ->where('id_lang',1)
      //   ->where('id_product',$products->id_product)
      //   ->get();

      return view('suppliers.details', compact('supplier','products', 'address'));
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
      $supplier = DB::table('suppliers')
        ->where('id_supplier', $id)
        ->first();

      DB::table('suppliers')
        ->where('id_supplier', $id)
        ->delete();

      DB::table('address')
          ->where('id_address', $supplier->id_address)
          ->delete();

      return redirect('suppliers')->with('supplier removed');
  }
}
