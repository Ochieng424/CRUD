<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use App\Employee;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $employees = Employee::all();
        return view('units', compact('employees'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'property' => 'required',
            'room_no' => 'required',
            'unit_type' => 'required',
            'square_feet' => 'required',
            'price' => 'required',
            'available' => 'required',

        ]);

        $unit = new Unit();

        $unit->employee_id = $request->input('property');
        $unit->room_no = $request->input('room_no');
        $unit->unit_type = $request->input('unit_type');
        $unit->square_feet = $request->input('square_feet');
        $unit->price = $request->input('price');
        $unit->available = $request->input('available');

        $unit->save();

        return redirect('/units')->with('success', 'Unit added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
