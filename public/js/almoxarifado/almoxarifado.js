function modalExibir(id) {
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

function modalCadastroAlmoxarifado(){
    $("#almoxarifado-form").submit();
}
