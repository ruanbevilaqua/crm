@extends('templates.master')

@section('content')
    <h1>Editar cliente</h1>
    <form 
        class="container" 
        action="{{ url('/clients/' . $client->id ) }}" 
        method="post"
        enctype="multipart/form-data"
    >
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" required type="text" class="form-control" id="name" value="{{ $client->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" required type="text" class="form-control" id="email" value="{{ $client->email }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input name="phone" required type="text" class="form-control" id="phone" value="{{ $client->phone }}">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <img src="{{ asset('storage/' . $client->photo) }}" class="rounded" width="100px" />
            <input name="photo" type="file" class="form-control" id="photo">
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection