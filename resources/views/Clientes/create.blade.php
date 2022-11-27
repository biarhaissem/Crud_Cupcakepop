@extends('clientes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar Cliente</h2>
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
    <form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="cupcakepop@cupcakepop.com">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" class="form-control" placeholder="(xx)xxxxx-xxxx">
            </div>
        </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                <strong>Sabores:</strong>
                <input type="text" name="sabores" class="form-control" placeholder="Brigadeiro, Ganache, Amendoim, Limão, Morango ou Beijinho">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="number" name="quantidade" class="form-control" placeholder="Quantos cupcakes?">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Observação:</strong>
                    <input type="text" name="observacao" class="form-control" placeholder="Detalhes e preferências">
                </div>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
@endsection