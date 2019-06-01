<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class ViewEmpController extends Controller
{
    public function index()
    {
        //
        $units = Unit::where('available', 'available')->get();
        return view('list', compact('units'));
    }
}
