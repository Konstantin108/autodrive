<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $vehicles = Vehicle::select()->get();
        return view('vehicles', ['vehicles' => $vehicles]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function delete(int $id)
    {
//        $vehicle = (new Vehicle())->getVehicleById($id);
//        return view('show', ['vehicle' => $vehicle]);
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        $vehicles = Vehicle::select()->get();
        return view('vehicles', ['vehicles' => $vehicles]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
//        $vehicle = (new Vehicle())->getVehicleById($id);
//        return view('show', ['vehicle' => $vehicle]);
        $vehicle = Vehicle::findOrFail($id);
        return view('show', ['vehicle' => $vehicle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'table_id',
            'dealer',
            'category',
            'type',
            'year',
            'brand',
            'model',
            'generation',
            'bodyConfiguration',
            'modification_id',
            'modification',
            'engineType',
            'engineVolume',
            'enginePower',
            'bodyType',
            'bodyDoorCount',
            'bodyColor',
            'bodyColorMetallic',
            'driveType',
            'gearboxType',
            'steeringWheel',
            'mileage',
            'mileageUnit',
            'price',
            'specialOffer',
            'availability',
            'ptsType',
            'photoCount',
            'ownersCount',
            'description',
            'vehicleCondition',
            'acquisitionSource',
            'acquisitionDate',
        ]);
        Vehicle::create($data);
        return redirect()->route('vehicles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('edit', ['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'table_id',
            'dealer',
            'category',
            'type',
            'year',
            'brand',
            'model',
            'generation',
            'bodyConfiguration',
            'modification_id',
            'modification',
            'engineType',
            'engineVolume',
            'enginePower',
            'bodyType',
            'bodyDoorCount',
            'bodyColor',
            'bodyColorMetallic',
            'driveType',
            'gearboxType',
            'steeringWheel',
            'mileage',
            'mileageUnit',
            'price',
            'specialOffer',
            'availability',
            'ptsType',
            'photoCount',
            'ownersCount',
            'description',
            'vehicleCondition',
            'acquisitionSource',
            'acquisitionDate',
        ]);
        $vehicle = Vehicle::findOrFail($id);
        $vehicle = $vehicle->fill($data)->save();
        if ($vehicle) {
            return redirect()->route('show', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
