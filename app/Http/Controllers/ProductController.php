<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('home', [
            'products' => $products
        ]);
    }

    public function add()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required',
            'qty' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Nama produk tidak boleh kosong',
            'image.required' => 'Foto produk tidak boleh kosong',
            'image.image' => 'Foto produk harus dalam format gambar',
            'price.required' => 'Harga produk tidak boleh kosong',
            'qty.required' => 'Stok produk tidak boleh kosong',
            'description.required' => 'Deskripsi produk tidak boleh kosong',
        ]);

        // Tambah Data
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images', 'public');

        Product::create($data);

        return redirect()->route('products.index');
    }
}
