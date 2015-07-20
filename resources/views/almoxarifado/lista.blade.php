@extends('layout.base')

@section('corpo')

@if( session('msg_sucesso') )
<div class="alert alert-sucesso" role="alert">
    <center>
        <spam>{{ session('msg_sucesso') }}<spam>
    <center>
</div>
@endif

@if( session('msg_erro') )
<div class="alert alert-danger" role="alert">
    <center>
        <spam>{{ session('msg_erro') }}<spam>
    <center>
</div>
@endif

<ol class="breadcrumb">
    <li><a href="#">Início</a></li>
    <li><a href="#">Almoxarifados</a></li>
    <li class="active">Lista</li>
</ol>

<div class="box box-shadow">
    <div class="page-header">
        <h1>Almoxarifados <small>lista&nbsp;<button class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroAlmoxarifado">Novo</button></small></h1>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Responsável</th>
                <th>Identificador</th>
                <th></th>
            </tr>
        </thred>
        <tbody>
            @foreach( $almoxarifados as $a )
                <tr>
                    <td>{{ $a->nome }}</td>
                    <td>{{ $a->responsavel }}</td>
                    <td>{{ $a->identificador }}</td>
                    <td>
                        <a id="exibir_{{ $a->identificador }}" href="#" onclick="modalExibirAlmoxarifado({{ $a->id }})"><i class="fa fa-search fw"></i></a>&nbsp;
                        <a id="editar_{{ $a->identificador }}" href="#" onclick="modalEditarAlmoxarifado({{ $a->id }})"><i class="fa fa-edit fw"></i></a>&nbsp;
                        <a id="deletar_{{ $a->identificador }}" href="#" onclick="modalDeletarAlmoxarifado({{ $a->id }})"><i class="fa fa-trash fw"></i></a>&nbsp;
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <nav class="text-center">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
  </nav>
</div>

<!-- Modais  -->
@include("almoxarifado._form-cadastro")
@include("almoxarifado._form-editar")
<!-- Fim Modais -->

@stop

@section('javascripts')
<script src="js/almoxarifado/almoxarifado.js"></script>
@stop
