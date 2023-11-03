<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dash-components.kelolaProduct', [
            'products' => Product::with('category')->latest()->get(),
            'categories'=>Category::all()
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
       
        $validatedData = $request->validate([
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => '|image|required|',
        
        ]);
    
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('folder-images');
        }
        Product::create($validatedData);
        return back()->with('success','product telah di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::findOrFail($id);
        // return view('dashboard.dash-components.show', compact('product'));
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
        $product = Product::findOrFail($id);


        if ($product->image) {
            Storage::delete($product->image);
           
        }
    
        $product::destroy($product->id);
    
        return redirect()->back()->with('success', 'gambar telah di hapus');
    }
}
