<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if (Auth::check()) {
            $pedidos = Pedido::orderBy('created_at', 'asc')->get();
            return view('administrativo.homeAdm', ['pedidos' => $pedidos]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
        if (Auth::check()) {
            $pedidoProduto = PedidoProduto::where('pedido_id', '=', $pedido->id)->get();
            return view('administrativo.pedido.show', ['pedidoProdutos' => $pedidoProduto, 'pedidos' => $pedido]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //

        if (Auth::check()) {
            $pedido->fill($request->all());
            $pedido->save();
            return redirect()->route('pedido.index');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida! Realize o login.');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
