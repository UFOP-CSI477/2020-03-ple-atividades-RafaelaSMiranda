<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $registros = Registro::orderBy('dataLimite', 'asc')->get();

        foreach ($registros as $registro) {

            // echo $registro->equipamento->nome . '-';
            // echo $registro->user->name . '-';

            $registro->dataLimite =  date('d-m-Y', strtotime($registro->dataLimite));
        }



        if (Auth::check()) {
            return view('administrativo.manutencao.index', ['registros' => $registros]);
        } else {
            return view('suporte.registro.index', ['registros' => $registros]);
        }
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
            $equipamentos = Equipamento::orderBy('nome')->get();

            return  view('administrativo.manutencao.create', ['equipamentos' => $equipamentos]);
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

            // dd($dados);

            if (!isNull($request->equipamento_id || $request->descricao || $request->dataLimite || $request->tipo)) {


                session()->flash('mensagemErro', 'Insira todos os dados para o cadastro');
            } else {

                $registro = new Registro;
                $registro->equipamento_id = $request->equipamento_id;
                $registro->user_id = Auth::user()->id;
                $registro->descricao = $request->descricao;
                $registro->dataLimite = $request->dataLimite;
                $registro->tipo = $request->tipo;

                $registro->save();

                // Registro::create($dados);
                session()->flash('mensagem', 'Manutenção cadastrada com sucesso!');
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
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //

        if (Auth::check()) {
            return view('administrativo.manutencao.show', ['registro' => $registro]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //

        if (Auth::check()) {
            $equipamentos = Equipamento::orderBy('nome')->get();
            return view('administrativo.manutencao.edit', ['registro' => $registro, 'equipamentos' => $equipamentos]);
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //

        if (Auth::check()) {
            $registro->fill($request->all());
            $registro->save();

            session()->flash('mensagem', 'Manutenção atualizada com sucesso');
            return redirect()->route('admPrincipal');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //

        if (Auth::check()) {

            $registro->delete();
            session()->flash('mensagem', 'Manutenção excluída com sucesso');
            return redirect()->route('admPrincipal');
        } else {
            session()->flash('mensagemErro', 'Operação não permitida!');
            return redirect()->route('administrativo.inicio');
        }
    }
}
