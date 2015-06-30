# Função pra exibição de Almoxarifados em um modal
modalExibir = ( id ) ->
    uri = '/almoxarifado/exibir/' + id
    $.getJSON uri, ( data ) ->
        alert( data[0]['nome'])
