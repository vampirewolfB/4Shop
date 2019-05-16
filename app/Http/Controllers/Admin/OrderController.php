<?php

namespace App\Http\Controllers\Admin;

use App\OpeningDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

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
}
