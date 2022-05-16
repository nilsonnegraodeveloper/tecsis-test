@extends('app.layouts.base')

@section('title')   
<h4 class="page-title">VISUALIZAR CLIENTE</h4>
@endsection

@section('content')   

<form class="form-horizontal form-material">
    @csrf

    <div class="form-group">
        <label for="name" class="col-md-12">Nome</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $client->name }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="id_client" class="col-md-12">CPF</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $client->id_client }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="phone" class="col-md-12">Telefone</label>
        <div class="col-md-12">
            <input type="text" class="form-control form-control-line" value="{{ $client->phone }}" 
            readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="col-md-12">E-mail</label>
        <div class="col-md-12">
            <input type="email" class="form-control form-control-line" value="{{ $client->email }}" 
            readonly>
        </div>
    </div>

    <a href="{{ route('app.clients.index') }}" class="btn btn-info">
      <i class="fa fa-arrow-left"></i> Voltar</a>
  <br>
  <br>
</form>

@endsection
