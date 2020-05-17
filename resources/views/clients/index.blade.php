@extends('templates.master')

@section('content')
    <h2> Lista de clientes </h2>
    @if(count($clients)>0)
        <?php $i = 0; ?>
        <table class="table table-stripped">
            <thead>
                <th></th>
                <th>photo</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Opções</th>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{++$i}}</td>
                    <td><img src="{{ asset('storage/' . $client->photo) }}" class="rounded" width="40px" /></td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <a href="/clients/{{ $client->id }}" class="btn btn-primary">Ver</a>
                        <a href="/clients/{{ $client->id }}/edit" class="btn btn-warning">Editar</a>
                        <!-- <a href="/clients/{{ $client->id }}/delete" class="btn btn-danger">Apagar</a> -->
                        <form action="{{ url('/clients', ['id' => $client->id]) }}" method="post">
                            <input class="btn btn-danger" type="submit" value="Delete" />
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h3 class="">Nenhum cliente cadastrado</h3>
    @endif
@endsection