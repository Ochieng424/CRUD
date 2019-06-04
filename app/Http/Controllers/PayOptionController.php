<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayOptionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $unit = $id;
        return view('booking.payment-option', compact('unit'));
    }
}
