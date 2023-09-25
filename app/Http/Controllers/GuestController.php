<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
use App\Models\Tour;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('guest.index', compact('vehicles'));
    }

    public function direct(Request $request)
    {
        // dd($request);
        $vehicle = Vehicle::where('id', $request->vehicle_id)->first();
        return view('guest.directForm', compact('vehicle'));
    }
    public function directStore(Request $request)
    {
        // dd($request);
        $vehicle = $request->vehicle_id;
        $package = $request->package_id;
        $order = Order::create([
            "username" => $request->username,
            "whatsapp" => $request->whatsapp,
            "date" => $request->date,
            "total_price" => $request->total_price,
            "time" => $request->time,
            "type" => 1,
            "status" => 1,

        ]);
        $sync_data[$vehicle] = ['package_id' => $package];
        $order->vehicles()->sync($sync_data);
        return redirect()->to('/')->with('success', 'Pesanan Anda Berhasil Dikirim :)');
    }
    public function cart(Request $request)
    {
        $vehicle_id = $request->vehicle_id;
        $amount = $request->amount;

        // $vehicles = Vehicle::all();
        return view('guest.cartForm', compact('vehicle_id', 'amount'));
    }
    public function cartStore(Request $request)
    {
        // dd(count($vehicles));
        $vehicles = $request->input('vehicle_id', []);
        $packages = $request->input('package_id', []);
        $order = Order::create([
            "username" => $request->username,
            "whatsapp" => $request->whatsapp,
            "date" => $request->date,
            "total_price" => $request->total_price,
            "time" => $request->time,
            "type" => 1,
            "status" => 1,

        ]);
        for ($i = 0; $i < count($vehicles); $i++) {
            $order->vehicles()->attach($vehicles[$i], ['package_id' => $packages[$i]]);
        };
        return redirect()->to('/')->with('success', 'Pesanan Anda Berhasil Dikirim :)');
    }

    public function tour($category)
    {
        $tours = Tour::where('category', $category)->get();
        return view('guest.tour', compact('tours', 'category'));
    }
    public function tourForm(Request $request)
    {
        // dd($request);
        $tour = Tour::where('id', $request->tour_id)->first();
        return view('guest.tourForm', compact('tour'));
    }
    public function tourStore(Request $request)
    {
        // dd($request);
        $order = Order::create([
            "username" => $request->username,
            "whatsapp" => $request->whatsapp,
            "date" => $request->date,
            "type" => 2,
            "status" => 1,
            'tour_id' => $request->tour_id

        ]);
        return redirect()->to('/')->with('success', 'Pesanan Anda Berhasil Dikirim :)');
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
