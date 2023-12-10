<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;

class PaymentController extends Controller
{


    public function payment(Request $request, $id)
    {

        $product = Product::find($id);

        $harga_produk = $product->price;
        $order_id = $product->id;
        $name_product = $product->name;
        $order_id = $product->id;
        $diskon = $harga_produk * (10 / 100);
        $gross_amount = $harga_produk - $diskon;
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-MMfca0oE4FfFLd8qn54FnoXh';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $gross_amount,

            ),
            'item_details' => array(
                [
                    'id' => $order_id,
                    'price' => $gross_amount,
                    'quantity' => 1,
                    'name' => $name_product
                ],

            ),
            'customer_details' => array(
                'name' => $request->get('name'),
                'phone' => $request->get('no_telp'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('pages.payment', [
            'snap_token' => $snapToken,
            'product' => $product,


        ]);
    }
    public function payment_post(Request $request)
    {

        $json = json_decode($request->get('json'));
        $order = Order::create([
            'status' => $json->transaction_status,
            'nama_product' => $request->get('nama_product'),
            'category_name' => $request->get('category_name'),
            'harga' => $request->get('harga'),
            'name' => $request->get('name'),
            'no_telp' => $request->get('no_telp'),
            'alamat' => $request->get('alamat'),
            'provinsi' => $request->get('provinsi'),
            'kabupaten' => $request->get('kabupaten'),
            'transaction_id' => $json->transaction_id,
            'order_id' => $json->order_id,
            'gross_amount' => $json->gross_amount,
            'payment_type' => $json->payment_type,
            'payment_code' => isset($json->payment_code) ? $json->payment_code : null,
            'pdf_url' => isset($json->pdf_url) ? $json->pdf_url : null,
        ]);

        return $order->save() ? redirect(url('/product'))->with('payment-success',' Kami sedang menyiapkan dan mengirim pesanan anda silahkan klik') : redirect(url('/product'))->with('alert-failed', 'Order gagal ada kesalahan');
    }

    // public function update(Request $request, Product $product)
    // {
    //     $product->name = $request->input('name');
    //     $product->description = $request->input('description');
    //     $product->price = $request->input('price');
    //     $product->category_id = $request->input('category_id');
    
    //     // Pastikan untuk menangani file gambar jika ada
    
    //     $product->save();
    
    //     return redirect('/dashboard/kelolaproducts')->with('success', 'Produk telah diperbarui');
    // }
}
