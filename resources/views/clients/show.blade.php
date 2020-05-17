@extends('templates.master')

@section('content')
    <h2>Informações do cliente</h2>
    <div class="row">
        <div class="col">
            <h3>Nome: {{$client->name}}</h3>
            <h4>Email: {{$client->email}}</h4>
            <h4>Telefone: {{$client->phone}}</h4>
        </div>
        <div class="col">
            <img src="{{ asset('storage/' . $client->photo) }}" class="rounded" width="200px" />
        </div>
    </div>
@endsection