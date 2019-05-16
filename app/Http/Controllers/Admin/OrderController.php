<?php

namespace App\Http\Controllers\Admin;

use App\OpeningDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Order_rule;
use DB;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        $date = OpeningDates::find(session('date'));
        return view('admin.orders')
                ->with('date', $date)
                ->with('orders', $date->orders);
    }

    public function show(Order $order)
    {
        $date = OpeningDates::find(session('date'));
        return view('admin.order')
                ->with('date', $date)
                ->with(compact('order'));
    }

    public function deliver(Order $order)
    {
        $order->delivered = $order->delivered ?: true;
        $order->save();
        return redirect()->route('admin.orders.index');
    }

    public function destroy(Order $order, Request $request)
    {
        $order->delete();
        $request->session()->flash('status', ['success', 'Bestelling verwijderd!']);
        return redirect()->route('admin.orders.index');
    }

    public function factory()
    {
        $date = OpeningDates::find(session('date'));

        $rules = Order_rule::
            select(DB::raw('count(id) AS count, description, size'))
            ->whereRaw('id IN (SELECT id FROM orders WHERE opening_id = ' . $date->id . ' AND payed = 1)')
            ->groupBy('description', 'size')->get();

        return view('admin.factory')
                ->with('date', $date)
                ->with(compact('rules'));
    }

    public function mail()
    {
        $date = OpeningDates::find(session('date'));
        return view('admin.mail')
                ->with('date', $date)
                ->with('orders', $date->orders()->where('payed', true)->get());
    }

    public function mail_send(Request $request)
    {
        $date = OpeningDates::find(session('date'));
        $orders = $date->orders()->where('payed', true)->get();
        $pickup = $request->pickup;

        foreach($orders as $order)
        {
            Mail::to($order->email)->send(new \App\Mail\OrderReady($order, $pickup));
        }
    }
}
