<div class="ls-modal" id="modalEditar">
    <div class="ls-modal-box">
        <div class="ls-modal-header">
            <button data-dismiss="modal">&times;</button>
            <h4 class="ls-modal-title">Cadastro de Almoxarifado</h4>
        </div>
        <div class="ls-modal-body" id="modalEditarBody">
            <form id='almoxarifado-cadastro-form' class='ls-form-horizontal row' method='POST' action='/almoxarifado/cadastrar'>
                <fieldset>
                    <label class="ls-label col-md-8">
                        <b class="ls-label-text">Nome</b>
                        <input type="text" name="nome" placeholder="Nome e sobrenome" required >
                        <input name='_token' value="{{{ csrf_token() }}}" type='hidden'>
                    </label>
                    <label class="ls-label col-md-4">
                        <b class="ls-label-text">Identificador</b>
                        <input type="text" name="identificador" placeholder="Escreva seu email" required >
                    </label>
                    <label class="ls-label col-md-12">
                        <b class="ls-label-text">Responsável</b>
                        <input type="text" name="responsavel" placeholder="O nome da sua rua" required >
                    </label>
                </fieldset>
            </form>
        </div>
        <div class="ls-modal-footer">
            <button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button>
            <button onclick="CadastrarAlmoxarifado()" type="submit" class="ls-btn-primary">Salvar Mudanças</button>
        </div>
    </div>
</div><!-- /.modal -->
