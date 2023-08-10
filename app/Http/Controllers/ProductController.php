<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PHPUnit\Exception;

class ProductController extends Controller
{
    //
    public function create(Request $request)
    {
        $data = ['name'=> $request->name,'price'=>$request->price];
        Product::create($data);
        return response()->json([
            'status' => '200',
            'products' => $data
        ],200);
        //return redirect()->route('product.index');
    }

    public function viewCreate(){
        return view('create');
    }
    public function viewProduct(){
        $data = Product::all();
        return response()->json($data);
        //return view('index',['product'=>$data]);
    }
    public function viewEdit(Request $request){
        return view('edit',['product'=> Product::find($request->input('id'))]);
    }

    public function delete($id){
        Product::find($id)->delete();
        $data = Product::find($id);
        return response()->json([
            'status' => '200',
            'mesage'=> 'Delete successfull!'
        ],200);
        //return redirect()->route('product.index');
    }

    public function edit(Request $request, $id){
        $product = Product::where('id',$id)->first();
        $product->update([
            'name' => $request->name,
            'price'=> $request->price
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Update success!',
            'product' => $product

        ],200);
        //return redirect()->route('product.index');
    }
}
