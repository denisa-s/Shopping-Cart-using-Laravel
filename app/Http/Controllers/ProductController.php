<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $products = Product::orderBy('nume','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('products.list',compact('products'))->with('i',$value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nume' => 'required','pret' =>'required','imagine' => 'required','categorie' =>'required','descriere' => 'required','desc_completa' =>'required','stare' => 'required','oferta' =>'required','noutati' => 'required','cod' =>'required','metal' => 'required','piatra' =>'required']);
        // create new task
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Your product added successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $this->validate($request, ['nume' => 'required','pret' =>'required','imagine' => 'required','categorie' =>'required','descriere' => 'required','desc_completa' =>'required','stare' => 'required','oferta' =>'required','noutati' => 'required','cod' =>'required','metal' => 'required','piatra' =>'required']);
        Product::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success','Product removed successfully');
    }
}
