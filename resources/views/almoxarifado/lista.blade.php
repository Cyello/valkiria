@extends('layout.base')

@section('corpo')

@include("shared.mensagens_de_sessao")


<ol class="ls-breadcrumb">
    <li><a href="#">Início</a></li>
    <li><a href="#">Almoxarifado</a></li>
    <li>Lista</li>
</ol>

<div class="ls-box-filter">
  <form action="" class="ls-form ls-form-inline">
    <label class="ls-label col-md-10 col-sm-10">
      <b class="ls-label-text">Filtro( Nome, Identificador, Responsável)</b>
      <input type="text" name="filtro">
    </label>
    <div class="ls-actions-btn">
      <button type="button" class="ls-btn">Filtrar</button>
    </div>
  </form>
</div>

<div class="ls-box">
    <h1 class="ls-title-3">Almoxarifados no Sistema
        <button class="ls-btn-primary" data-ls-module="modal" data-target="#myAwesomeModal">Novo</button>
    </h1>
    <hr />

    @if( count($almoxarifados) > 0 )
    <div class="ls-pagination-filter">
        <ul class="ls-pagination">
            <li><a href="#">&laquo; Anterior</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Próximo &raquo;</a></li>
        </ul>

        <div class="ls-filter-view">
            Exibir
            <div class="ls-custom-select">
                <select name="" id="" class="ls-select">
                    <option value="10">10</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            ítens por página
        </div>
    </div>

    <table class="ls-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Responsável</th>
                <th>Identificador</th>
                <th>Ações</th>
            </tr>
        </thred>
        <tbody>
            @foreach( $almoxarifados as $a )
                <tr>
                    <td>{{ $a->nome }}</td>
                    <td>{{ $a->responsavel }}</td>
                    <td>{{ $a->identificador }}</td>
                    <td>
                        <a id="exibir_{{ $a->identificador }}" href="#"><i class="fa fa-search fw"></i></a>&nbsp;
                        <a id="editar_{{ $a->identificador }}" href="#"><i class="fa fa-edit fw"></i></a>&nbsp;
                        <a id="deletar_{{ $a->identificador }}" href="#"><i class="fa fa-trash fw"></i></a>&nbsp;
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p class="ls-background-warning ls-txt-center" style="margin-left:20px;margin-right:20px;height:40px;padding-top:13px;">
        Sem registros no banco de dados
    </p>
    @endif
</div>
@stop

<!-- Modais -->
@include("almoxarifado._form-cadastro")
@include("almoxarifado._form-editar")
@include("almoxarifado._modal-exibir")
<!-- -->

@section("javascripts")
<script src="js/controllers/almoxarifado.js"></script>
@stop
