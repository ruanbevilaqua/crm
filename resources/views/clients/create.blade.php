@extends('templates.master')

@section('content')
    <h1>Cadastrar cliente</h1>
    <form 
        class="container" 
        action="{{ url('/clients') }}" 
        method="post"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" required type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" required type="text" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input name="phone" required type="text" class="form-control" id="phone">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input name="photo" required type="file" class="form-control" id="photo">
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection