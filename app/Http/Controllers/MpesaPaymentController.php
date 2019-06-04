<?php

namespace App\Http\Controllers;

use App\MpesaPayment;
use Illuminate\Http\Request;
use App\Unit;

class MpesaPaymentController extends Controller
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

    public function index($id)
    {
        $UnitDetail = Unit::where('id', $id)->get();
        return view('booking.mpesa-payment', compact('UnitDetail'));
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
        $validation = $request->validate([
            'mpesa_transaction_id' => 'required',

        ]);

        $booking = new MpesaPayment();

        $booking->user_id = $request->input('user_id');
        $booking->unit_id = $request->input('unit_id');
        $booking->payment_mode = $request->input('payment_mode');
        $booking->mpesa_transaction_id = $request->input('mpesa_transaction_id');
        $booking->amount = $request->input('amount');

        $booking->save();

        return redirect('/invoice')->with('success', 'Your request has been received. Awaiting approval');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MpesaPayment $mpesaPayment
     * @return \Illuminate\Http\Response
     */
    public function show(MpesaPayment $mpesaPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MpesaPayment $mpesaPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(MpesaPayment $mpesaPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\MpesaPayment $mpesaPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MpesaPayment $mpesaPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MpesaPayment $mpesaPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(MpesaPayment $mpesaPayment)
    {
        //
    }
}
