<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = $this->invoice
            ->join('clients', 'invoices.client_id', '=', 'clients.id')
            ->join('products', 'invoices.product_id', '=', 'products.id')
            ->select(
                'invoices.*',
                'invoices.id',
                'clients.name AS client',
                'products.name AS product',
                'invoices.amount',
                'invoices.unit_price',
                'invoices.total_price'
            )
            ->get();
        return view('app.invoices.invoices', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $products = Product::all();
        return view('app.invoices.newInvoice', ['clients' => $clients], ['products' => $products]);
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
            'client_id' => 'required|integer',
            'product_id' => 'required|integer',
            'amount' => 'required|integer'
        ]);

        $invoice = $this->invoice;

        $product = Product::find($request->product_id);
        $totalPrice = $request->amount * $product->price;

        if ($invoice === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação!');
            return redirect('app/invoices');
        else :
            $invoice->client_id = $request->client_id;
            $invoice->product_id = $request->product_id;
            $invoice->amount = $request->amount;
            $invoice->unit_price = $product->price;
            $invoice->total_price = $totalPrice;
            $invoice->save();
            $request->session()->flash('alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/invoices');
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
        $invoice = $this->invoice
            ->join('clients', 'invoices.client_id', '=', 'clients.id')
            ->join('products', 'invoices.product_id', '=', 'products.id')
            ->select(
                'invoices.*',
                'invoices.id',
                'clients.id',
                'clients.name AS client',
                'products.id',
                'products.name AS product',
                'invoices.amount',
                'invoices.unit_price',
                'invoices.total_price'
            )            
            ->where('invoices.id', $id)
            ->first();
        return view('app.invoices.viewInvoice', ['invoice' => $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = $this->invoice->find($id);
        $clients = Client::all();
        $products = Product::all();
        return view('app.invoices.editInvoice', compact('invoice', 'clients', 'products'));
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
            'client_id' => 'required|integer',
            'product_id' => 'required|integer',
            'amount' => 'required|integer'
        ]);

        $invoice = $this->invoice->find($id);

        $product = Product::find($request->product_id);
        $totalPrice = $request->amount * $product->price;

        if ($invoice === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação!');
            return redirect('app/invoices');
        else :
            $invoice->client_id = $request->client_id;
            $invoice->product_id = $request->product_id;
            $invoice->amount = $request->amount;
            $invoice->unit_price = $product->price;
            $invoice->total_price = $totalPrice;
            $invoice->update();
            $request->session()->flash('alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/invoices');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = $this->invoice->find($id);

        if ($invoice === null) :
            return redirect('app/invoices')->with('alert-danger', 'Erro ao tentar Realizar Operação!');
        else :
            $invoice->delete();
            return redirect('app/invoices')->with('alert-success', 'Operação Realizada com Sucesso!');
        endif;
    }
}
