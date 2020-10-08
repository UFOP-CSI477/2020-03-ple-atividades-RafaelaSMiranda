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
    }

    public function adicionar(Produto $produto)
    {

        $quantidade = 1;

        $chave = 'produto.' . $produto->id;

        if (session()->has('produto')) {
            if (session()->has($chave)) {

                $item =  session()->pull($chave);

                $quantidade = $item['quantidade'];
                $quantidade++;
            }

            session([$chave => [
                'quantidade' => $quantidade,
                'valor' => $produto->valor
            ]]);
        } else {

            session([$chave => [

                'quantidade' => $quantidade,
                'valor' => $produto->valor
            ]]);
        }

        // foreach ($pedidos as $key => $pedido) {

        //     echo $key . '-';
        //     print_r($pedido);
        //     echo "\n";
        // }

        return redirect()->route('produto.index', ['quantidade' => session('produto')]);
    }

    public function remover(Produto $produto)
    {


        $valor = 0;

        $chave = 'produto.' . $produto->id;

        if (session()->has('produto')) {
            if (session()->has($chave)) {

                $item =  session()->pull($chave);

                $valor = $item['quantidade'];

                if ($valor > 0) {
                    $valor--;

                    print_r($item);
                    echo ($valor);
                    echo 'chave' . $chave;

                    session([$chave => [
                        'quantidade' => $valor,
                        'valor' => $produto->valor
                    ]]);
                } else {

                    session()->flash('mensagemErro', 'Não há mais produto para ser removido');
                }
            } else {

                session()->flash('mensagemErro', 'Este produto ainda não esta no seu carrinho');
            }
        } else {
            session()->flash('mensagemErro', 'Não há produto no carrinho para ser removido');
        }

        return redirect()->route('produto.index', ['quantidade' => session('produto')]);
    }

    public function cancelar(Request $request)
    {

        $request->session()->forget('produto');
        return redirect()->route('produto.index');


    }

}
