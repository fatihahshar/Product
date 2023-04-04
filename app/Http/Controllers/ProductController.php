<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
use File;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        //$product = Product::all();
        if($request->keyword){
            $products= Product::where('productname','LIKE','%'.$request->keyword.'%')->paginate(5);
        }else
        $products = Product::paginate(5);
        
        return view('products.index', compact('products'))->with([
            'alert-type' =>'alert-primary',
            'alert' => 'New product has been saved'
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
        $product = Product::create($request->all());

        if($request->hasFile('attachment')){
            $filename = $product->id.'-'.date('Y-m-d').'-'.$request->attachment->getCLientOriginalExtension();
            Storage::disk('public')->put('image/'.$filename, File::get($request->attachment));

            $product->image = $filename;
            $product->save();
        }

        return redirect()->route('products.index');
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request,Product $product){
        $product->update($request->all());

        return redirect()->route('products.index')->with([
            'alert-type' =>'alert-success',
            'alert' => 'Product details has been updated'
        ]);
    }

    
    public function destroy(Request $request, Product $product)
    {
        if($request->image){
            Storage::disk('public')->delete($product->image);
        }else{
            $product->delete();
        }
        
        return redirect()->route('products.index')->with([
            'alert-type' =>'alert-warning',
            'alert' => 'Product  has been deleted'
        ]);
    }
}
