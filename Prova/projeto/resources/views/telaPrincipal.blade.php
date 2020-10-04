@extends('head')

@section('conteudo')


    <section class="jumbotron text-center" >
        <div class="container" >
            <h1 style="font-size: 50px;">Sistema de Controle de Agendamentos de Doações de Sangue</h1>
            <p class="lead text-muted">Doe sangue, doe vida <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-droplet-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
</svg> </p>

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
                                    <a href="{{route('agendamento.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info"> Área Geral</a>
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
                                    <a href="{{route('homeAdm')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%; justify-content: center; align-items: center;" type="button" class="btn btn-light border-info">Área Administrativa</a>
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
