@extends('layout.base')

@section('corpo')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Almoxarifados</a></li>
            <li class="active">Listagem</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h2 class="titulo">
                    <i class="fa fa-cubes fa-2x"></i>
                    Almoxarifados
                </h2>
                <button class="btn btn-secondary adicionar" title="Adicionar Almoxarifado" data-toggle="modal" data-target="#modalAlmoxarifado">
                    <i class="fa fa-plus fa-fw"></i>
                </button>
            </div>
            <div class="col-md-7 col-sm-7">
                <form id="form_pesquisa">
                    <div class="row">
                        <div class="col-sm-10 col-md-10">
                            <div class="form-group">
                                <label for="pesquisa" class="src-only"></label>
                                <input name="pesquisa" id="pesquisa" class="form-control"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Pesquisa</button>
                    </div>
                </form>
            </div>
        </div>


        <hr />

        <table class="table table-striped table-hover">
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
                            <a id="exibir_{{ $a->identificador }}" href="#" onclick="modalExibir({{$a->id}})"><i class="fa fa-search fw"></i></a>&nbsp;
                            <a id="editar_{{ $a->identificador }}" href="#"><i class="fa fa-edit fw"></i></a>&nbsp;
                            <a id="deletar_{{ $a->identificador }}" href="#"><i class="fa fa-trash fw"></i></a>&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAlmoxarifado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal_body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop
