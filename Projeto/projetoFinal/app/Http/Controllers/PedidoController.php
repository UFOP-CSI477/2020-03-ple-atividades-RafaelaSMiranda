<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use DateTime;
use Illuminate\Http\Request;

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


        $produtos = Produto::get();


        foreach ($produtos as $produto) {

            $chave = 'produto.' . $produto->id;

            if (session()->has($chave)) {

                $quantidade = session($chave)['quantidade'];
                $produto->quantidade = $quantidade;
            } else {
                $produto->quantidade = 0;
            }
        }

        // dd($produto);
        return view('pedido.sacola', ['produtos' => $produtos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // $produtos = Produto::get();
        // $valorTotal = 0;

        // if (session()->has('produto')) {

        //     foreach ($produtos as $produto) {

        //         $chave = 'produto.' . $produto->id;


        //         if (session()->has($chave)) {
        //             $valorTotal += $produto->valor * session()->get($chave)['quantidade'];
        //         }
        //     }


        //     $pedido = new Pedido;
        //     $pedido->data = new DateTime();
        //     $pedido->valorTotal = $valorTotal;
        //     $pedido->cliente_id = 2;
        //     $pedido->status = 'PA';

        //     $pedido->save();
        // } else {
        //     session()->flash('mensagemErro', 'Escolha pelo menos um produto');
        // }

        // return redirect()->route('pedidoProduto.store');
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
