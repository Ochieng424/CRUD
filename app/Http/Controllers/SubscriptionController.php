<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('subscription.subscribe');
    }
}
