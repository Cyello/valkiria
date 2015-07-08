@extends('layout.base')

@section('corpo')
<div class="row">
    <div class="col-md-12 col-sm-12">
        @if( old('nome') )
        <div class="alert alert-success text-center" role="alert">
            <strong>Sucesso!</strong>
            Almoxarifado {{ old('nome') }} foi adicionado.
        </div>
        @endif
        @if( session('msg_sucesso') )
        <div class="alert alert-success text-center" role="alert">
            {{ session('msg_sucesso') }}
        </div>
        @endif
        @if( session('msg_erro') )
        <div class="alert alert-danger text-center" role="alert">
            {{ session('msg_erro') }}
        </div>
        @endif
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
                <button class="btn btn-secondary adicionar" title="Adicionar Almoxarifado" data-toggle="modal" data-target="#modalCadastroAlmoxarifado">
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
                            <a id="exibir_{{ $a->identificador }}" href="#" onclick="modalExibirAlmoxarifado({{ $a->id }})"><i class="fa fa-search fw"></i></a>&nbsp;
                            <a id="editar_{{ $a->identificador }}" href="#" onclick="modalEditarAlmoxarifado({{ $a->id }})"><i class="fa fa-edit fw"></i></a>&nbsp;
                            <a id="deletar_{{ $a->identificador }}" href="#" onclick="modalDeletarAlmoxarifado({{ $a->id }})"><i class="fa fa-trash fw"></i></a>&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav class="text-right">
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

<!-- Modal Exibição [auxilio com js]-->
<div class="modal fade" id="modalAlmoxarifado" tabindex="-1" role="dialog" aria-labelledby="modal_titulo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_titulo"></h4>
      </div>
      <div class="modal-body" id="modal_body">
      </div>
      <div class="modal-footer" id="modal_footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Cadastro -->
<div class="modal fade" id="modalCadastroAlmoxarifado" tabindex="-1" role="dialog" aria-labelledby="modal_titulo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="c_modal_titulo">Cadastro Almoxarifado</h4>
        </div>
        <div class="modal-body" id="c_modal_body">
            <form id='almoxarifado-cadastro-form' class='inline-form' method='POST' action='/almoxarifado/cadastrar'>
               <div class='row'>
                   <div class='col-md-12 col-sm-12'>
                       <div class='form-group'>
                           <label for='nome'>Nome</label>
                           <input id="c_nome" name='nome' class='form-control' />
                           <input name='_token' value="{{{ csrf_token() }}}" type='hidden'>
                       </div>
                   </div>
               </div>
               <div class='row'>
                   <div class='col-md-6 col-sm-6'>
                       <div class='form-group'>
                           <label for='identificador'>Responsável</label>
                           <div class='input-group'>
                               <input id="c_responsavel" name='responsavel' class='form-control' />
                               <div class='input-group-addon'><a onclick='geraResponsavel()' href=#><i class='fa fa-plus-square-o'></i></a></div>
                           </div>
                       </div>
                   </div>
                   <div class='col-md-6 col-sm-6'>
                       <div class='form-group'>
                           <label for='identificador'>Identificador</label>
                           <div class='input-group'>
                               <input id="c_identificador" name='identificador' class='form-control' />
                               <div class='input-group-addon'><a onclick='geraID()' href=#><i class='fa fa-plus-square-o'></i></a></div>
                           </div>
                       </div>
                   </div>
               </div>
            </form>
        </div>
        <div class="modal-footer" id="c_modal_footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button id="c_bt-enviar" onclick="CadastrarAlmoxarifado()" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Cadastrar</button>
        </div>
        </div>
    </div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="modalEditarAlmoxarifado" tabindex="-1" role="dialog" aria-labelledby="modal_titulo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="e-modal_titulo"></h4>
        </div>
        <div class="modal-body" id="e_modal_body">
            <form id='almoxarifado-editar-form' class='inline-form' method='PUT' action=''>
               <div class='row'>
                   <div class='col-md-12 col-sm-12'>
                       <div class='form-group'>
                           <label for='nome'>Nome</label>
                           <input id="e-nome" name='nome' class='form-control' />
                           <input name='_token' value="{{{ csrf_token() }}}" type='hidden'>
                       </div>
                   </div>
               </div>
               <div class='row'>
                   <div class='col-md-6 col-sm-6'>
                       <div class='form-group'>
                           <label for='identificador'>Responsável</label>
                           <div class='input-group'>
                               <input id="e-responsavel" name='responsavel' class='form-control' />
                               <div class='input-group-addon'><a onclick='geraResponsavel()' href=#><i class='fa fa-plus-square-o'></i></a></div>
                           </div>
                       </div>
                   </div>
                   <div class='col-md-6 col-sm-6'>
                       <div class='form-group'>
                           <label for='identificador'>Identificador</label>
                           <div class='input-group'>
                               <input id="e-identificador" name='identificador' class='form-control' />
                               <div class='input-group-addon'><a onclick='geraID()' href=#><i class='fa fa-plus-square-o'></i></a></div>
                           </div>
                       </div>
                   </div>
               </div>
            </form>
        </div>
        <div class="modal-footer" id="e-modal_footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button id="e-bt-enviar" onclick="EditarAlmoxarifado()" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Cadastrar</button>
        </div>
        </div>
    </div>
</div>
@stop

@section('javascripts')
<script src="js/almoxarifado/almoxarifado.js"></script>
@stop
