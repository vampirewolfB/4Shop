<?php

namespace App\Http\Controllers\Admin;

use App\OpeningDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpeningDatesController extends Controller
{

    public function index()
    {
        $dates = OpeningDates::orderBy('start', 'desc')->get();
        return view('admin.dates.index')
                ->with(compact('dates'));
    }

    public function create(Request $request)
    {
        session()->flash('url', $request->server('HTTP_REFERER'));  
        return view('admin.newdate');
    }

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
        return redirect(session('url'));
    }

    public function edit(OpeningDates $date)
    {
        return view('admin.dates.edit')
                ->with(compact('date'));
    }

    public function update(Request $request, OpeningDates $date)
    {
        $this->validate(request(), [
            'start' => 'required|date',
            'end' => 'required|date'
        ]);

        $date->start = $request->start; 
        $date->end = $request->end;
        $date->save();
        return redirect()->route('admin.dates.index');
    }

    public function destroy(OpeningDates $date)
    {
        $date->delete();
        return redirect()->route('admin.dates.index');
    }
}
