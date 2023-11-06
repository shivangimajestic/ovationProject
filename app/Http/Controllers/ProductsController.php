<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //$products = Products::orderBy('id', 'DESC')->paginate(10);

        $products = Products::all();

        return view('admin/products/index' ,  compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin/products/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prdt = new Products;
        $prdt->productName = $request->input('productName');
        $prdt->productPrice= $request->input('productPrice');
        $prdt->SKU= $request->input('SKU');
        $prdt->productCategory= $request->input('productCategory');
        $prdt->tags=$request->input('tags');
        $prdt->save();
        $products = Products::all();
        return view('admin/products/index' ,  compact('products'));
        //return redirect()->back()->with('status','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        $trash = Products::onlyTrashed();

        return view('admin.products.trash', compact('trash'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prdt = Products::find($id);
        return view('admin/products/edit', compact('prdt'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $prdt = Products::find($id);
        $prdt->productName = $request->input('productName');
        $prdt->productPrice= $request->input('productPrice');
        $prdt->SKU= $request->input('SKU');
        $prdt->productCategory= $request->input('productCategory');
        $prdt->tags=$request->input('tags');
        $prdt->update();
        $products = Products::all();
        return view('admin/products/index' ,  compact('products'));
        //return redirect()->back()->with('status','Product Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request , $id)
    {
        $prdt = Products::find($id);
        $prdt->delete();
        return redirect('index')->with('trash','Product deleted');
    }

    public function restore(Request $request , $id) 
    {
        $prdt = Products::find($id)->withTrashed()->restore();

        return redirect('index')->withSuccess(__('User restored successfully.'));
    }
}
