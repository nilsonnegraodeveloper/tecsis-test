@extends('app.layouts.base')

@section('content')

@section('title')
    <h4 class="page-title">CLIENTES</h4>
@endsection

<a href="{{ route ('app.clients.create') }}" class="btn btn-info">
    <i class="fa fa-plus"></i> Novo</a>
<a href="/" class="btn btn-info">
    <i class="fa fa-arrow-left"></i> Voltar</a>
<br>
<table class='table table-bordered table-striped table-responsive' id="datatable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th width="10%">Visualizar</th>
            <th width="7%">Editar</th>
            <th width="7%">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->id_client }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>
                <td align="center"><a href="/app/clients/{{ $client->id }}/show/">
                        <i class="fa fa-eye" title="Visualizar Cliente"></i></a>
                    </a></td>

                <td align="center"><a href="/app/clients/{{ $client->id }}/edit/">
                        <i class="fa fa-edit" title="Editar Cliente"></i></a>
                </td>

                <td align="center">
                    <form action="/app/clients/{{ $client->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=""><a href="/app/clients/{{ $client->id }}">
                                <i class="sidebar-item-icon fa fa-trash"
                                    onclick="return confirm('Deseja realmente Deletar este Cliente?');"
                                    title="Deletar Cliente"></i></a></button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<br>
@endsection
