@extends('app.layouts.base')

@section('content')   

@section('title') 
    <h4 class="page-title">EDITAR CLIENTE</h4>
@endsection

<form method="POST" action="/app/clients/{{ $client->id }}" class="form-horizontal form-material">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name" class="col-md-12">Nome</label>
        <div class="col-md-12">
            <input type="text" id="name" name="name" maxlenght="100" class="form-control form-control-line" value="{{ $client->name }}" 
            required>
        </div>
    </div>
    
    <div class="form-group">
        <label for="id_client" class="col-md-12">CPF</label>
        <div class="col-md-12">
            <input type="text" id="id_client" name="id_client" maxlenght="14" class="form-control form-control-line" value="{{ $client->id_client }}" 
            required>
        </div>
    </div>
    
    <div class="form-group">
        <label for="phone" class="col-md-12">Telefone</label>
        <div class="col-md-12">
            <input type="text" id="phone" name="phone" maxlenght="14" class="form-control form-control-line" value="{{ $client->phone }}" 
            required>
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="col-md-12">E-mail</label>
        <div class="col-md-12">
            <input type="email" id="email" name="email" maxlenght="300" class="form-control form-control-line" value="{{ $client->email }}" 
            required>
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
