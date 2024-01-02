<?php

namespace App\Http\Controllers;

use App\Models\GalangDanaModel;
use Illuminate\Http\Request;
use App\Models\transaksis;

class PaymentController extends Controller{

    public function index(Request $request ,$cid){
        $campaign = GalangDanaModel::findOrFail($cid);
        return view('transaksi.index',compact('campaign'));
    }

    public function store(Request $request, $id){

        $data = $request->all();

        $transaction = transaksis::create([
            'user_id' => auth()->user()->id,
            'kamp_id' => $id,
            'price' => $data['price'],
            'username' => $data['username'],
            'no_hp' => $data['no_hp'],
            'pesan' => $data['pesan'],
        ]);

        $newPrice = $transaction->price;

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

            return redirect()->route('transaksi.checkout', ['id' => $id, 'snapToken' => $snapToken, 'price' => $newPrice]);
    }

    public function checkout(Request $request, $id) {
        $snapToken = $request->input('snapToken');
        $newPrice = $request->input('price');
        return view('transaksi.checkout', compact('snapToken', 'newPrice'));
    }

}
