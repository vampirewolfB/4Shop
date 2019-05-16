<?php

namespace App\Http\Controllers\Admin;

use App\OpeningDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpeningDatesController extends Controller
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
        return view('admin.newdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'start' => 'required|date',
            'end' => 'required|date'
        ]);

        $date = new OpeningDates();
        $date->start = $request->start; 
        $date->end = $request->end;
        $date->save();
        return redirect()->route('admin.home');
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
