<?php

namespace App\Http\Controllers;

use App\ViewUnits;
use Illuminate\Http\Request;
use App\Unit;

class ViewUnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $units = Unit::where('employee_id', $id)->get();
        return view('property-units', compact('units'));
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
     * @param  \App\ViewUnits  $viewUnits
     * @return \Illuminate\Http\Response
     */
    public function show(ViewUnits $viewUnits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ViewUnits  $viewUnits
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewUnits $viewUnits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ViewUnits  $viewUnits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewUnits $viewUnits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ViewUnits  $viewUnits
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewUnits $viewUnits)
    {
        //
    }
}
