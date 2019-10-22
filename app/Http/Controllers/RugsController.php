<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_Variant;
use App\Product_Details;
use DB;

class RugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.rugs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view('pages.success');
        // add product to product variants table
        $prod_var = new Product_Variant;
        // $prod_var->product_variants_id = intval($prod_var->product_variants_id + 1);
        $prod_var->product_id = 3;
        $var_name = $request->input('color') . ' ' . $request->input('length');
        $prod_var->product_variant_name = $var_name;
        $prod_var->total_price = DB::table('products')->where('name', 'chair')->value('price')
            + DB::table('variant__values')->where('value', $request->input('color'))->value('price') 
            + DB::table('variant__values')->where('value', $request->input('length'))->value('price'); 
        $prod_var->save();

        // add to product details for purposes of joining all info together
        $product_details = new Product_Details;
        // $product_details->product_detail_id = intval($product_details->product_details_id + 1);
        $product_details->product_variable_id = DB::table('product__variants')->where('product_variant_name', $var_name)->value('product_variants_id');
        $product_details->value_id = DB::table('variant__values')->where('value', $request->input('color'))->value('value_id'); 
        $product_details->save();

        $product_details = new Product_Details;
        // $product_details->product_detail_id = intval($product_details->product_details_id + 1);
        $product_details->product_variable_id = DB::table('product__variants')->where('product_variant_name', $var_name)->value('product_variants_id');
        $product_details->value_id = DB::table('variant__values')->where('value', $request->input('length'))->value('value_id'); 
        $product_details->save();

        return redirect('/products');
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
