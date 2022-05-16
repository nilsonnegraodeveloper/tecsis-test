@extends('app.layouts.base')

@section('title')   
<h4 class="page-title">VISUALIZAR PRODUTO</h4>
@endsection

@section('content')   

<form class="form-horizontal form-material">
    @csrf

    <div class="form-group">
        <label for="sku" class="col-md-12">SKU</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $product->sku }}" readonly>
        </div>
    </div>
    
      <div class="form-group">
          <label for="name" class="col-md-12">Nome</label>
          <div class="col-md-12">
              <input type="text" class="form-control form-control-line" value="{{ $product->name }}" readonly>
          </div>
      </div>
      
      <div class="form-group">
          <label for="description" class="col-md-12">Descrição</label>
          <div class="col-md-12">
            <textarea style="resize: none" class="form-control form-control-line" cols="38" rows="5" readonly>{{ $product->description }}</textarea>
          </div>
      </div>
      
      <div class="form-group">
          <label for="price" class="col-md-12">Preço</label>
          <div class="col-md-12">
              <input type="text" class="form-control form-control-line" value="{{ number_format($product->price, 2, ',', '.') }}" readonly>
          </div>
      </div>

    <a href="{{ route('app.products.index') }}" class="btn btn-info">
      <i class="fa fa-arrow-left"></i> Voltar</a>
  <br>
  <br>
</form>

@endsection
