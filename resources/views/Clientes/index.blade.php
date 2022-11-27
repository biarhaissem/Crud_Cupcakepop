@extends('clientes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h3>Cadastro de Clientes CupCakePop</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Criar Cliente</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Sabores</th>
            <th>Quantidade</th>
            <th>Observação</th>
            <th>Ação</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->sabores }}</td>
            <td>{{ $cliente->quantidade }}</td>
            <td>{{ $cliente->observacao }}</td>
            <td><form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Do you really want to delete cliente?')" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
{!! $clientes->links() !!}
@endsection