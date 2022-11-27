@extends('clientes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Cliente</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Há algo errado com seus dados! <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $cliente->nome }}" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $cliente->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" value="{{ $cliente->telefone }}" class="form-control" placeholder="Telefone">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Sabores:</strong>
                <input type="text" name="sabores" value="{{ $cliente->sabores }}" class="form-control" placeholder="Sabores">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Quantidade:</strong>
                <input type="number" name="quantidade" value="{{ $cliente->quantidade }}" class="form-control" placeholder="Quantidade">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Observação:</strong>
                <input type="text" name="observacao" value="{{ $cliente->observacao }}" class="form-control" placeholder="Observação">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    </form>
@endsection