<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $produtos = Produto::orderBy('nome')->get();

        return view('produtos.cardapio', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {


        $valor = 1;

        $chave = 'produto.'.$produto->id;

        if (session()->has('produto')) {
            if (session()->has($chave)) {

                // dd(session()->get('produto'));

                // $item = session($chave);

                // foreach ($itens as $item) {

                // if($item[$produto->id]){
                // if ($item[0] == $produto->id) {

                $item =  session()->pull($chave);

                $valor = $item['quantidade'];
                $valor++;
            }
            // }
            // }

            session([$chave => [
                'quantidade' => $valor
            ]]);



            // dd(session()->all());
        } else {

            session([$chave => [

                'quantidade' => $valor
            ]]);

            // dd(session('produto'));
        }




        $pedidos = session('produto');


        foreach ($pedidos as $key => $pedido) {

            echo $key . '-';
            print_r($pedido);
            echo "\n";
        }



        return redirect()->route('produto.index', ['quantidade' => session('produto')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
