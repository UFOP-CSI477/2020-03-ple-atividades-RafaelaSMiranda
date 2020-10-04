<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoa;
use App\Models\Coleta;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Auth = true;

        $agendamentos = Agendamento::orderBy('data', 'desc')->get();
        // $pessoas = Pessoa::orderBy('nome', 'asc')->get();


        // $agendamentos =  Agendamento::addSelect(['nome' => Pessoa::select('nome')
        //     ->whereColumn('id', 'agendamentos.pessoa_id')
        //     ->orderBy('nome', 'desc')
        //     ])->get();




        foreach ($agendamentos as $agendamento) {


            $agendamento->data =  date('d-m-Y', strtotime($agendamento->data));
        }

        if ($Auth) {

            return view('administrativo.agendamento.index', ['agendamentos' => $agendamentos]);
        } else {
            return view('geral.agendamento.index', ['agendamentos' => $agendamentos]);
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

        $agendamentos = Agendamento::get();
        $pessoa = Pessoa::get();
        $coleta = Coleta::get();

        return view('administrativo.agendamento.create', ['agendamentos' => $agendamentos, 'pessoas' => $pessoa, 'coletas' => $coleta]);
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

        if (!isNull(($request->pessoa_id) || ($request->coleta_id) || ($request->data))) {
            session()->flash('mensagem', 'Insira todos os dados');
            return redirect()->route('homeAdm');
        } else {

            Agendamento::create($request->all());

            session()->flash('mensagem', 'Agendamento cadastro com sucesso');
            return redirect()->route('homeAdm');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        //

        return view('administrativo.agendamento.show', ['agendamento' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        //

        $pessoa = Pessoa::get();
        $coleta = Coleta::get();
        return view('administrativo.agendamento.edit', ['agendamento' => $agendamento, 'pessoas' => $pessoa, 'coletas' => $coleta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        //

        $agendamento->fill($request->all());
        $agendamento->save();

        session()->flash('mensagem', 'Agendamento atualizado com sucesso!');
        return redirect()->route('homeAdm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        //

        $agendamento->delete();

        session()->flash('mensagem', 'Agendamento excluído com sucesso!');
        return redirect()->route('homeAdm');
    }
}
