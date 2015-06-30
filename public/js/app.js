(function() {
  var modalExibir;

  modalExibir = function(id) {
    var uri;
    uri = '/almoxarifado/exibir/' + id;
    return $.getJSON(uri, function(data) {
      return alert(data[0]['nome']);
    });
  };

}).call(this);

//# sourceMappingURL=app.js.map