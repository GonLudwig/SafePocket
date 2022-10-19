<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsUserRequest;
use App\Http\Requests\UpdateProductsUserRequest;
use App\Models\ProductsUser;

class ProductsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsUser  $productsUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsUser $productsUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsUser  $productsUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsUser $productsUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsUserRequest  $request
     * @param  \App\Models\ProductsUser  $productsUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsUserRequest $request, ProductsUser $productsUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsUser  $productsUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsUser $productsUser)
    {
        //
    }
}
