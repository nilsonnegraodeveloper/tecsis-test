@extends('app.layouts.base')

@section('content')

@section('title')
    <h4 class="page-title">PRODUTOS</h4>
@endsection

<a href="{{ route ('app.products.create') }}" class="btn btn-info">
    <i class="fa fa-plus"></i> Novo</a>
<a href="/" class="btn btn-info">
    <i class="fa fa-arrow-left"></i> Voltar</a>
<br>
<table class='table table-bordered table-striped table-responsive' id="datatable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>SKU</th>
            <th>Nome</th>
            <th>Preço</th>
            <th width="10%">Visualizar</th>
            <th width="7%">Editar</th>
            <th width="7%">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                <td align="center"><a href="/app/products/{{ $product->id }}/show/">
                        <i class="fa fa-eye" title="Visualizar Produto"></i></a>
                    </a></td>

                <td align="center"><a href="/app/products/{{ $product->id }}/edit/">
                        <i class="fa fa-edit" title="Editar Produto"></i></a>
                </td>

                <td align="center">
                    <form action="/app/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=""><a href="/app/products/{{ $product->id }}">
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
