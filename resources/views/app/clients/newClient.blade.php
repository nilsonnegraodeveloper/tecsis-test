@extends('app.layouts.base')

@section('content')

@section('title')    
      <h4 class="page-title">NOVO CLIENTE</h4>
@endsection

<form method="POST" action="{{ route('app.clients.store') }}" class="form-horizontal form-material">
  @csrf
  <div class="form-group">
      <label for="name" class="col-md-12">Nome</label>
      <div class="col-md-12">
          <input type="text" id="name" name="name" maxlenght="100" class="form-control form-control-line" required>
      </div>
  </div>
  
  <div class="form-group">
      <label for="id_client" class="col-md-12">CPF</label>
      <div class="col-md-12">
          <input type="text" id="id_client" name="id_client" maxlenght="14" class="form-control form-control-line" data-mask-for-cpf-cnpj required>
      </div>
  </div>
  
  <div class="form-group">
      <label for="phone" class="col-md-12">Telefone</label>
      <div class="col-md-12">
          <input type="text" id="phone" name="phone" maxlenght="14" class="form-control form-control-line" onkeyup="mascara(this, mtel);" required>
      </div>
  </div>
  
  <div class="form-group">
      <label for="email" class="col-md-12">E-mail</label>
      <div class="col-md-12">
          <input type="email" id="email" name="email" maxlenght="300" class="form-control form-control-line" required>
      </div>
  </div>

  <button type="submit" name="salvar" class="btn btn-info">
    <i class="fa fa-save"></i> Salvar
</button>
    
  <a href="{{ route('app.clients.index') }}" class="btn btn-info">
    <i class="fa fa-arrow-left"></i> Voltar</a>
  <br>
  <br>
  </form>

@endsection
