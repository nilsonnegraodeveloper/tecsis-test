@extends('app.layouts.base')

@section('content')

@section('title')
    <h4 class="page-title">NOVA FATURA</h4>
@endsection

<form method="POST" action="{{ route('app.invoices.store') }}" class="form-horizontal form-material">
    @csrf

    <div class="form-group">
        <label for="name" class="col-md-12">Cliente</label>
        <div class="col-md-12">
            <select name="client_id" class="form-control form-control-line" required>
                <option value=""> -- Selecione um Cliente -- </option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-md-12">Produto</label>
        <div class="col-md-12">
            <select name="product_id" class="form-control form-control-line" required>
                <option value=""> -- Selecione um Produto --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="zipCode" class="col-md-12">Quantidade</label>
        <div class="col-md-12">
            <input type="number" id="amount" name="amount" maxlenght="4" class="form-control form-control-line">
        </div>
    </div>

    <button class="btn btn-info">
        <i class="fa fa-save"></i> Salvar
    </button>

    <a href="{{ route('app.invoices.index') }}" class="btn btn-info">
        <i class="fa fa-arrow-left"></i> Voltar</a>
    <br>
    <br>
</form>

@endsection
