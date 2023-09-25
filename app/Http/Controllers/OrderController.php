<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function vehicle()
    {
        $orders = Order::where('type', 1)->where('status', 1)->get();
        return view('admin.order.vehicle', compact('orders'));
    }
    public function vehicleShow($id)
    {
        $order = Order::where('id', $id)->first();
        return view('admin.order.vehicleShow', compact('order'));
    }
    public function vehicleUpdate(Request $request, $id)
    {
        // dd($request);
        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
        ]);
        return redirect()->to('/admin/transaction/vehicle')->with('success', 'order diterima');
    }

    public function tour()
    {
        $orders = Order::where('type', 2)->where('status', 1)->get();
        return view('admin.order.tour', compact('orders'));
    }
    public function tourShow($id)
    {
        $order = Order::where('id', $id)->with('tour')->first();
        return view('admin.order.tourShow', compact('order'));
    }
    public function tourUpdate(Request $request, $id)
    {
        // dd($request);
        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
        ]);
        return redirect()->to('/admin/transaction/tour')->with('success', 'order diterima');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
