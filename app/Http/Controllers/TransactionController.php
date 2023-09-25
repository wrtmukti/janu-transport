<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vehicle()
    {
        $orders = Order::where('type', 1)->where('status', '!=', 1)->get();
        return view('admin.transaction.vehicle', compact('orders'));
    }
    public function vehicleDelete($id)
    {
        Order::destroy($id);
        return redirect()->to('/admin/transaction/vehicle')->with('danger', 'Transaksi dihapus');
    }
    public function tour()
    {
        $orders = Order::where('type', 2)->where('status', '!=', 1)->get();
        return view('admin.transaction.tour', compact('orders'));
    }
    public function tourDelete($id)
    {
        Order::destroy($id);
        return redirect()->to('/admin/transaction/tour')->with('danger', 'Transaksi dihapus');
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
