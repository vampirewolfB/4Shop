<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OpeningDates;

class AdminController extends Controller
{
    public function index()
    {
    	$OpeningDates = OpeningDates::orderBy('start', 'DESC')->get();
        return view('admin.home')
        		->with(compact('OpeningDates'));
    }

    public function set(Request $request)
    {
    	$this->validate(request(), [
            'date' => 'required|min:1'
        ]);

        session(['date' => $request->date]);
        return redirect()->route('admin.orders.index');
    }
}
