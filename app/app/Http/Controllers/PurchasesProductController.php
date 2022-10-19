<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchasesProductRequest;
use App\Http\Requests\UpdatePurchasesProductRequest;
use App\Models\PurchasesProduct;

class PurchasesProductController extends Controller
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
     * @param  \App\Http\Requests\StorePurchasesProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchasesProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchasesProduct  $purchasesProduct
     * @return \Illuminate\Http\Response
     */
    public function show(PurchasesProduct $purchasesProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchasesProduct  $purchasesProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchasesProduct $purchasesProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchasesProductRequest  $request
     * @param  \App\Models\PurchasesProduct  $purchasesProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchasesProductRequest $request, PurchasesProduct $purchasesProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchasesProduct  $purchasesProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchasesProduct $purchasesProduct)
    {
        //
    }
}
