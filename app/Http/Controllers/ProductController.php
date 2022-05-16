<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('app.products.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.products.newProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|unique:products|min:3|max:50',
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:255',
            'price' => 'required'
        ]);

        $product = $this->product;
        $price = str_replace(',', '.', str_replace('.', '', $request->price));

        if ($product === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação');
            return redirect('app/products/create');
        else :
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $price;
            $product->save();
            $request->session()->flash('alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/products');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = $this->product->find($id);
        return view('app.products.viewProduct', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);
        return view('app.products.editProduct', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sku' => 'required|min:3|max:50',
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:255',
            'price' => 'required'
        ]);

        $product = $this->product->find($id);
        $price = str_replace(',', '.', str_replace('.', '', $request->price));

        if ($product === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação');
            return redirect('app/products/edit');
        else :
            $product->sku = $request->sku;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $price;
            $product->update();
            $request->session()->flash('alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/products');
        endif;
    }

    /**
     * Remove the specified resource from storage     
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);

        if ($product === null) :
            return redirect('app/products')->with('alert-danger', 'Erro ao tentar Realizar Operação!');
        else :
            $product->delete();
            return redirect('app/products')->with('alert-success', 'Operação Realizada com Sucesso!');
        endif;
    }
}
