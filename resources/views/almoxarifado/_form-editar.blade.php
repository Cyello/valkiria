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
