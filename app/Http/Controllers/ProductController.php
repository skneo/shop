<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $page_heading = "Add New Product";
        $prod_edit = 0;
        $submit_url = '/add_product';
        $data = compact('page_heading', 'prod_edit', 'submit_url');
        return view('product_form')->with($data);
    }
    public function add_product(Request $request)
    {
        $request->validate(
            [
                'prod_name' => 'required',
                'prod_cat' => 'required',
                'prod_desc' => 'required',
                'prod_price' => 'required',
                'prod_image' => 'required'
            ]
        );
        $product = new Products;
        $product->prod_name = $request['prod_name'];
        $product->prod_cat = $request['prod_cat'];
        $product->prod_desc = $request['prod_desc'];
        $product->prod_price = $request['prod_price'];
        $product->prod_image = $request['prod_image'];
        $product->save();
        $request->session()->flash('success', $product->prod_name . ' added!');
        return redirect('/all_products');
    }
    public function all_products()
    {
        $products = Products::all();
        $data = compact('products');
        return view('all_products')->with($data);
    }
    public function edit(Request $request, $id)
    {
        $product = Products::find($id);
        if (!is_null($product)) {
            $page_heading = "Update Product";
            $prod_edit = 1;
            $submit_url = '/products/update/' . $id;
            $data = compact('product', 'page_heading', 'prod_edit', 'submit_url');
            return view('product_form')->with($data);
        } else {
            $request->session()->flash('danger', 'No product found with id ' . $id);
        }

        return redirect('/all_products');
    }
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $request->validate(
            [
                'prod_name' => 'required',
                'prod_cat' => 'required',
                'prod_desc' => 'required',
                'prod_price' => 'required',
                'prod_image' => 'required'
            ]
        );
        $product->prod_name = $request['prod_name'];
        $product->prod_cat = $request['prod_cat'];
        $product->prod_desc = $request['prod_desc'];
        $product->prod_price = $request['prod_price'];
        $product->prod_image = $request['prod_image'];
        $product->save();
        $request->session()->flash('success', $product->prod_name . ' updated!');
        return redirect('/all_products');
    }
    public function delete(Request $request, $id)
    {
        $product = Products::find($id);
        if (!is_null($product)) {
            $product->delete();
            $request->session()->flash('success', $product->prod_name . ' deleted !');
        } else {
            $request->session()->flash('danger', 'No product found with id ' . $id);
        }

        return redirect('/all_products');
    }
}
