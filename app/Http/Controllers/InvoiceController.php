<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MpesaPayment;
use App\Unit;
use App\Employee;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $my_invoice = MpesaPayment::where('user_id', $id)->get();

        foreach ($my_invoice as $invoice) {
//            $unit = Unit::where('id', $invoice['unit_id'])->get();

            $amount = $invoice['amount'];
            $transaction_id = $invoice['mpesa_transaction_id'];
            $payment_mode = $invoice['payment_mode'];
            $room_no = Unit::where('id', $invoice['unit_id'])->value('room_no');
            $employee_id = Unit::where('id', $invoice['unit_id'])->value('employee_id');
            $property_name = Employee::where('id', $employee_id)->value('first_name');
//            $agent_name = Employee::where('id', $employee_id)->value('first_name');

            $Invoices = array(
                'amount' => $amount,
                'transaction_id' => $transaction_id,
                'payment_mode' => $payment_mode,
                'room_no' => $room_no,
                'property_name' => $property_name,

            );

            print_r($Invoices);

            return view('invoice.invoice')->with(array('Invoices'=>$Invoices));

        }
    }
}
