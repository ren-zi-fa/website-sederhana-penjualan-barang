<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class KelolaPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard.dash-components.kelolaPesanan',[
        'orders'=>Order::latest()->get()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
    
        $order::destroy($order->id);
    
        return redirect()->back()->with('success', 'riwayat orderan telah dihapus');
    }
}
