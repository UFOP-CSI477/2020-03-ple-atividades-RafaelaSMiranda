<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class CarrinhoController extends Controller
{
    //


    public function index()
    {


        $pedidos = Pedido::where([
            'status' => 'RE',
            'cliente_id' => 2,
        ])->get();

        return view('pedido.sacola', ['pedidos' => $pedidos]);
    }

    public function adicionar()
    {

        dd('entrou aqui');

        $this->Middleware('VerifyCsrfToken');

        $req = Request();

        $idProduto = $req->input('id');

        $produto = Produto::find($idProduto);

        if (isEmpty()($produto->id)) {
            $req->session()->flash('mensagemErro', 'Produto não disponível.');
            return redirect()->route('carrinho.index');
        }

        $idUsuario = Auth::user()->id;

        $idPedido = Pedido::consultaId([
            'cliente_id' => $idUsuario,
            'status' => 'RE'
        ]);

        if (empty($idPedido)) {
            $pedido_novo = Pedido::create([
                'cliente_id' => $idUsuario,
                'status' => 'RE'
            ]);

            $idPedido = $pedido_novo->id;
        }

        PedidoProduto::create([

            'pedido_id' => $idPedido,
            'produto_id' => $idProduto,
            'valor' => $produto->valor,
            'status' => 'RE',
            'quantidade' => 1
        ]);


        $req->session()->flash('mensagem', 'Produto adicionado com sucesso');

        return redirect()->route('carrinho.index');


    }
}
