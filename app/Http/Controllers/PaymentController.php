<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksis;
use Midtrans\Transaction;

class PaymentController extends Controller{

    public function index(){
        return view('transaksi.index');
    }

    public function store(Request $request){

        $data = $request->all();

        $transaction = transaksis::create([
            'user_id' => auth()->user()->id,
            'price' => $data['price'],
            'username' => $data['username'],
            'no_hp' => $data['no_hp'],
            'pesan' => $data['pesan'],
        ]);

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $data['price'],
                ),
                'customer_details' => array(
                    'username' => $data['username'],
                ),
            );
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return redirect()->route('transaksi.checkout', ['snapToken' => $snapToken]);
    }

    public function checkoutIndex(Request $request) {
        $snapToken = $request->input('snapToken');
        return view('transaksi.checkout', compact('snapToken'));
    }

}
