<?php

namespace App\Http\Controllers\Admin;

use App\OpeningDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hi!";
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpeningDates  $openingDates
     * @return \Illuminate\Http\Response
     */
    public function show(OpeningDates $openingDates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpeningDates  $openingDates
     * @return \Illuminate\Http\Response
     */
    public function edit(OpeningDates $openingDates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpeningDates  $openingDates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpeningDates $openingDates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpeningDates  $openingDates
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpeningDates $openingDates)
    {
        //
    }
}
