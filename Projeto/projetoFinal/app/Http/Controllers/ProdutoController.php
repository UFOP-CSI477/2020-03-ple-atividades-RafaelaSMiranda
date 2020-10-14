<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

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

        if (Auth::check()) {

            $produtos = Produto::orderBy('nome', 'asc')->get();
            return view('administrativo.produto.index', ['produtos' => $produtos]);
        } else {

            $produtos = Produto::orderBy('valor', 'asc')->get();

            return view('produtos.cardapio', ['produtos' => $produtos]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::check()) {
            return view('administrativo.produto.create');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
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

        if (Auth::check()) {
            if (!isNull($request->nome || $request->descricao || $request->valor || $request->tipo || $request->condicao)) {
                session()->flash('mensagemErro', 'Insira todos os dados para o cadastro');
            } else {

                Produto::create($request->all());
                session()->flash('mensagem', 'Produto adicionado com sucesso');
            }
            return redirect()->route('produto.index');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */

    public function show(Produto $produto)
    {

        if (Auth::check()) {
            return view('administrativo.produto.show', ['produtos' => $produto]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {


        if (Auth::check()) {
            return view('administrativo.produto.edit', ['produtos' => $produto]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('login');
        }
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

        if (Auth::check()) {
            $produto->fill($request->all());
            $produto->save();

            session()->flash('mensagem', 'Produto atualizado com sucesso');
            return redirect()->route('produto.index');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('pedido.index');
        }
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

        if (Auth::check()) {

            $query =  PedidoProduto::where('produto_id', '=', $produto->id)->get();
            // echo sizeof($query);

            if (sizeof($query) > 0) {

                session()->flash('mensagemErro', 'Existem pedidos cadastradas para este produto.
            Não foi possível concluir a exclusão');
                return redirect()->route('produto.index');
            } else {
                $produto->delete();
                session()->flash('mensagem', 'Produto excluído com sucesso');
                return redirect()->route('produto.index');
            }
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('pedido.index');
        }
    }
}
