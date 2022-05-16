@extends('app.layouts.base')

@section('title')
    <h4 class="page-title">EDITAR FATURA</h4>
@endsection

@section('content')
    <form method="POST" action="/app/invoices/{{ $invoice->id }}" class="form-horizontal form-material">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" class="col-md-12">Cliente</label>
            <div class="col-md-12">
                <select name="client_id" class="form-control form-control-line" required>
                    <option value="">Selecione um Cliente</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" @if ($client->id == $invoice->client_id) selected @endif>
                            {{ $client->name }}</option>
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
                        <option value="{{ $product->id }}" @if ($product->id == $invoice->product_id) selected @endif>
                            {{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="zipCode" class="col-md-12">Quantidade</label>
            <div class="col-md-12">
                <input type="number" id="amount" name="amount" maxlenght="4" class="form-control form-control-line"
                    value="{{ $invoice->amount }}" required>
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
