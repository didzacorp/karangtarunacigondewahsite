<?php

namespace App\Http\Controllers;

use App\ProductGroup;
use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_group.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product_group.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductGroup $productGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductGroup $productGroup)
    {
        //
    }
}
