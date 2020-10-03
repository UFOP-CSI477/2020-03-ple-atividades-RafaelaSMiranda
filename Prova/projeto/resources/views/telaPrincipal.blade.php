@extends('head')

@section('conteudo')



    <section class="jumbotron text-center">
        <div class="container" >
            <h1 style="font-size: 50px;">Sistema de Controle de Agendamentos de Doações de Sangue</h1>
            <p class="lead text-muted">Doe sangue, salve vida!</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body bordered shadow">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="btn-group justify-content-center" style="display: flex;">
                                    <a href="{{route('agendamento.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info"><span class="glyphicon glyphicon-wrench"></span> Área Geral</a>
                                </div>
                            </div>
                            <br>
                            <p class="card-text" style="font-family: 'Times New Roman', Times, serif; text-align: center; font-size: 140%;">Nesta área você encontrará informações referente aos agendamentos para doeações de sangue.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body bordered shadow">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="btn-group justify-content-center" style="display: flex;">
                                    <a href="{{route('homeAdm')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info"><span class="glyphicon glyphicon-folder-open mr-3"></span>Área Administrativa</a>
                                </div>
                            </div>
                            <br>
                            <p class="card-text" style="font-family: 'Times New Roman', Times, serif; text-align: center; font-size: 140%;">Realize o seu login e tenha acesso às informações referente aos agendamentos de doações de sangue.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @endSection
