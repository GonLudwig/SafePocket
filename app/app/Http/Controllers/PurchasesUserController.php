<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchasesUserRequest;
use App\Http\Requests\UpdatePurchasesUserRequest;
use App\Models\PurchasesUser;

class PurchasesUserController extends Controller
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
     * @param  \App\Http\Requests\StorePurchasesUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchasesUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchasesUser  $purchasesUser
     * @return \Illuminate\Http\Response
     */
    public function show(PurchasesUser $purchasesUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchasesUser  $purchasesUser
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchasesUser $purchasesUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchasesUserRequest  $request
     * @param  \App\Models\PurchasesUser  $purchasesUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchasesUserRequest $request, PurchasesUser $purchasesUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchasesUser  $purchasesUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchasesUser $purchasesUser)
    {
        //
    }
}
