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
