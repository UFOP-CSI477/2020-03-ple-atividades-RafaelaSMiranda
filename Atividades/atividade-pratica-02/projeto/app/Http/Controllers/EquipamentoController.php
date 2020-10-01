<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {


        $equipamentos = Equipamento::orderby('nome')->get();

        if (Auth::check()) {
            return view('administrativo.equipamento.index', ['equipamentos' => $equipamentos]);
        } else {
            return view('suporte.equipamento.index', ['equipamentos' => $equipamentos]);
        }

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

        if (Auth::check()) {
            return view('administrativo.equipamento.create');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
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
            $dados = $request->all();

            if (!isNull($dados['nome'])) {
                session()->flash('mensagemErro', 'Insira todos os dados para o cadastro');
            } else {

                Equipamento::create($request->all());
                session()->flash('mensagem', 'Equipamento cadastrado com sucesso!');
            }
            return redirect()->route('admPrincipal');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        //
        if (Auth::check()) {
            return view('administrativo.equipamento.show', ['equipamento' => $equipamento]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        //

        if (Auth::check()) {
            return view('administrativo.equipamento.edit', ['equipamento' => $equipamento]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        //

        if (Auth::check()) {
            $equipamento->fill($request->all());
            $equipamento->save();

            session()->flash('mensagem', 'Equipamento atualizado com sucesso');
            return redirect()->route('admPrincipal');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        //

        if (Auth::check()) {
            $query =  Registro::where('equipamento_id', '=', $equipamento->id)->get();
            // echo sizeof($query);

            if (sizeof($query) > 0) {

                session()->flash('mensagemErro', 'Existem manutenções cadastradas para este equipamento.
            Não foi possível concluir a exclusão');
                return redirect()->route('admPrincipal');
            } else {
                $equipamento->delete();
                session()->flash('mensagem', 'Equipamento excluído com sucesso');
                return redirect()->route('admPrincipal');
            }
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }
}
