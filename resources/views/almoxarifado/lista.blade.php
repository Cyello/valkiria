@extends('layout.base')

@section('corpo')

@if( session('msg_sucesso') )
<div class="alert alert-success" role="alert">
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
<div class="ls-box ls-sm-space ls-box-gray">
    <ol class="ls-breadcrumb">
        <li><a href="#">Início</a></li>
        <li><a href="#">Almoxarifado</a></li>
        <li>Lista</li>
    </ol>
</div>

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
    <h1 class="ls-title-3">Almoxarifados no Sistema</h1>
    <hr />
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

    @if( count($almoxarifados) > 0 )
    <table class="ls-table">
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
    @else
    <p class="bg-warning text-center" style="margin-left:20px;margin-right: 20px;">
        Sem registros no banco de dados
    </p>
    @endif
</div>


@stop
