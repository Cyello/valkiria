function modalExibirAlmoxarifado(id) {
    var uri;
    uri = '/almoxarifado/exibir/' + id;
    return $.getJSON(uri, function(data) {

        $("#modal_body").html(" ");

        var html;

        html = "<ul class='list-group'>";
        html += "   <li class='list-group-item'><spam><b>Nome</b>:&nbsp;</spam>"+data['nome']+"</li>";
        html += "   <li class='list-group-item'><spam><b>Responsável</b>:&nbsp;</spam>"+data['responsavel']+"</li>";
        html += "   <li class='list-group-item'><spam><b>Identificador</b>:&nbsp;</spam>"+data['identificador']+"</li>";
        html += "</ul>";
        html += "<hr>"

        $("#modal_titulo").html("Almoxarifado #<i>"+data['identificador']+"</i>");
        $("#modal_body").html(html);
        $("#modalAlmoxarifado").modal("show");
    });
};

function CadastrarAlmoxarifado(){
    $("#almoxarifado-cadastro-form").submit();
}

function EditarAlmoxarifado(){
    $("#almoxarifado-editar-form").submit();
}

function modalEditarAlmoxarifado( id ){
    var uri;
    uri = "/almoxarifado/editar/"+id;

    return $.getJSON( uri, function( data ){

        $("#almoxarifado-editar-form").attr("method", "POST");
        $("#almoxarifado-editar-form").attr("action", uri);
        $("#e-nome").attr("value",data["nome"]);
        $("#e-responsavel").attr("value",data["responsavel"]);
        $("#e-identificador").attr("value",data["identificador"]);
        $("#e-bt-enviar").html("Editar");

        $("#e-modal_titulo").html("Editar Almoxarifado #<i>"+data['identificador']+"</i>");
        $("#modalEditarAlmoxarifado").modal("show");
    });
}
