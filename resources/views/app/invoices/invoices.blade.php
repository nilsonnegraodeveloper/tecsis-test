@extends('app.layouts.base')

@section('content')

@section('title')
    <h4 class="page-title">FATURAS</h4>
@endsection

<a href="{{ route('app.invoices.create') }}" class="btn btn-info">
    <i class="fa fa-plus"></i> Novo</a>
<a href="/" class="btn btn-info">
    <i class="fa fa-arrow-left"></i> Voltar</a>
<br>
<table class='table table-bordered table-striped table-responsive' id="datatable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário (R$)</th>
            <th>Total Fatura (R$)</th>
            <th width="10%">Visualizar</th>
            <th width="7%">Editar</th>
            <th width="7%">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->client }}</td>
                <td>{{ $invoice->product }}</td>
                <td>{{ $invoice->amount }}</td>
                <td>{{ number_format($invoice->unit_price, 2, ',', '.') }}</td>
                <td>{{ number_format($invoice->total_price, 2, ',', '.') }}</td>
                <td align="center"><a href="/app/invoices/{{ $invoice->id }}/show/">
                    <i class="fa fa-eye" title="Visualizar Fatura"></i></a>
                </a></td>

            <td align="center"><a href="/app/invoices/{{ $invoice->id }}/edit/">
                    <i class="fa fa-edit" title="Editar Fatura"></i></a>
            </td>

            <td align="center">
                <form action="/app/invoices/{{ $invoice->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=""><a href="/app/invoices/{{ $invoice->id }}">
                            <i class="sidebar-item-icon fa fa-trash"
                                onclick="return confirm('Deseja realmente Deletar este Produto?');"
                                title="Deletar Produto"></i></a></button>
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
@endsection
