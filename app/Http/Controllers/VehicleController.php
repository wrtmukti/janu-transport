<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',
            'price' => 'required|integer',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/vehicle/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Vehicle::create($input);

        $vehicles = Vehicle::all();

        return view('admin.vehicle.index', compact('vehicles'));
    }

    public function package(Request $request)
    {
        $vehicle_id = $request->vehicle_id;
        return view('admin.vehicle.package', compact('vehicle_id'));
    }

    public function packageStore(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);
        Package::create([
            'name' => $request->name,
            'price' => $request->price,
            'vehicle_id' => $request->vehicle_id,
        ]);
        return redirect()->to('/admin/vehicle/' .  $request->vehicle_id)->with('success', 'paket baru berhasil ditambahkan :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.vehicle.show', compact('vehicle'));
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
        // dd($request);
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update([
            'status' => $request->status,
        ]);
        return redirect()->to('/admin/vehicle')->with('success', 'Status Kendaraan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Vehicle::destroy($id);
        return redirect()->to('/admin/vehicle')->with('danger', 'Transaksi dihapus');
    }
}
