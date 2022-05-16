@extends('app.layouts.base')

@section('title')   
<h4 class="page-title">VISUALIZAR FATURA</h4>
@endsection

@section('content')   

<form class="form-horizontal form-material">  

    <div class="form-group">
        <label for="client_id" class="col-md-12">Cliente</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $invoice->client }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="product_id" class="col-md-12">Produto</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $invoice->product }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="amount" class="col-md-12">Quantidade</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $invoice->amount }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="unit_price" class="col-md-12">Preço Unitário</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ number_format($invoice->unit_price, 2, ',', '.') }}" 
            readonly>
        </div>
    </div>

    <div class="form-group">
        <label for="total_price" class="col-md-12">Total (R$)</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ number_format($invoice->total_price, 2, ',', '.') }}" 
            readonly>
        </div>
    </div>

    <a href="{{ route('app.invoices.index') }}" class="btn btn-info">
      <i class="fa fa-arrow-left"></i> Voltar</a>
  <br>
  <br>
</form>

@endsection
