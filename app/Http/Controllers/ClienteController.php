<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::latest()->paginate(10);
        return view('clientes.index',compact('clientes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => ('required'),
            'email' => ('required'),
            'telefone' => ('required'),
            'sabores' => ('required'),
            'quantidade' => ('required'),
            'observacao' => ('nullable')

        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente created successfully.');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show',compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => ('required'),
            'email' => ('required'),
            'telefone' => ('required'),
            'sabores' => ('required'),
            'quantidade' => ('required'),
            'observacao' => ('nullable')
        ]);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente updated successfully');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success','Cliente deleted successfully');
    }
}
