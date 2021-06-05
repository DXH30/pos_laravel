<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InventoryController extends Controller
{
    public function stock_management(Request $request) {
        $products = Product::get();
        $data = array(
            'products' => $products
        );
        return view('inventory.stock_management', $data);
    }

    public function postStock(Request $request) {
        $data_in = array(
            'upc' => $request->input('upc'),
            'sku' => $request->input('sku'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'cid' => $request->input('cid') ?? 1
        );

        $product = new Product;
        $product->fill($data_in);
        $product->save();
        return redirect()->back();
    }

    public function editStock(Request $request, $id) {
        $data_in = array(
            'upc' => $request->input('upc'),
            'sku' => $request->input('sku'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'cid' => $request->input('cid') ?? 1
        );

        $product = Product::find($id);
        $product->fill($data_in);
        $product->save();
        return redirect()->back();
    }

    public function deleteStock(Request $request) {
        $product_id = $request->input('id');
        if (Product::find($product_id)->delete()) {
            $response = array(
                'msg' => "Berhasil hapus produk",
                'success' => true
            );
        } else {
            $response = array(
                'msg' => "Gagal hapus produk",
                'success' => false
            );
        }
        return response()->json($response);
    }

    public function track_order(Request $request) {
        if ($request->isMethod('POST')) {
        } else {
            return view('inventory.track_order');
        }
    }

    public function requests(Request $request) {
        if ($request->isMethod('POST')) {
        } else {
            return view('inventory.requests');
        }
    }
}
