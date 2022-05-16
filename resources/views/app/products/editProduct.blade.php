@extends('app.layouts.base')

@section('content')   

@section('title') 
    <h4 class="page-title">EDITAR PRODUTO</h4>
@endsection

<form method="POST" action="/app/products/{{ $product->id }}" class="form-horizontal form-material">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="sku" class="col-md-12">SKU</label>
        <div class="col-md-12">
            <input type="text" id="sku" name="sku" maxlenght="50" class="form-control form-control-line" value="{{ $product->sku }}" required>
        </div>
    </div>
    
      <div class="form-group">
          <label for="name" class="col-md-12">Nome</label>
          <div class="col-md-12">
              <input type="text" id="name" name="name" maxlenght="100" class="form-control form-control-line" value="{{ $product->name }}" required>
          </div>
      </div>
      
      <div class="form-group">
          <label for="description" class="col-md-12">Descrição</label>
          <div class="col-md-12">
            <textarea style="resize: none" id="description" name="description" class="form-control form-control-line" cols="38" rows="5">{{ $product->description }}</textarea>
          </div>
      </div>
      
      <div class="form-group">
          <label for="price" class="col-md-12">Preço</label>
          <div class="col-md-12">
              <input type="text" id="price" name="price" maxlenght="20" class="form-control form-control-line" value="{{ $product->price }}" required>
          </div>
      </div>

    <button type="submit" class="btn btn-info">
        <i class="fa fa-save"></i> Salvar
    </button>
   
    <a href="{{ route('app.products.index') }}" class="btn btn-info">
        <i class="fa fa-arrow-left"></i> Voltar</a>
    <br>
    <br>
</form>

@endsection
