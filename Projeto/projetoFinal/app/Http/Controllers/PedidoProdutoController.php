<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use DateTime;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



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

        $produtos = Produto::get();
        $valorTotal = 0;

        if (session()->has('produto')) {

            foreach ($produtos as $produto) {

                $chave = 'produto.' . $produto->id;


                if (session()->has($chave)) {
                    $valorTotal += $produto->valor * session()->get($chave)['quantidade'];
                }
            }


            $pedido = new Pedido();
            $pedido->data = new DateTime();
            $pedido->valorTotal = $valorTotal;
            $pedido->cliente_id = 2;
            $pedido->status = 'PA';

            $pedido->save();


            foreach ($produtos as $produto) {

                $chave = 'produto.' . $produto->id;

                if (session()->has($chave)) {

                    // dd($chave);
                    $newPedidoProduto = new PedidoProduto();
                    $newPedidoProduto->quantidade = session()->get($chave)['quantidade'];
                    $newPedidoProduto->valor = $produto->valor * session()->get($chave)['quantidade'];
                    $newPedidoProduto->pedido_id = $pedido->id;
                    $newPedidoProduto->produto_id = $produto->id;
                    $newPedidoProduto->status = 'PA';
                    $newPedidoProduto->save();
                }

                $request->session()->forget('produto');
            }
        } else {
            session()->flash('mensagemErro', 'Escolha pelo menos um produto');
        }

        return redirect()->route('produto.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PedidoProduto  $pedidoProduto
     * @return \Illuminate\Http\Response
     */
    public function show(PedidoProduto $pedidoProduto)
    {
        //



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PedidoProduto  $pedidoProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(PedidoProduto $pedidoProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PedidoProduto  $pedidoProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidoProduto $pedidoProduto)
    {
        //


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PedidoProduto  $pedidoProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidoProduto $pedidoProduto)
    {
        //

        session()->forget('produto');

        return redirect()->route('produto.index');
    }
}
