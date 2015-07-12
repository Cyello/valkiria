@extends("layout.base")

@section("corpo")
<div class="row">
    <div class="col-md-12 col-sm-12">
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
                    <i class="fa fa-archive fa-2x"></i>
                    Itens
                </h2>
                <button class="btn btn-secondary adicionar" title="Adicionar Item" data-toggle="modal" data-target="#modalCadastroAlmoxarifado">
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
                    <th>Valor(R$)</th>
                    <th>Quantidade</th>
                    <th>Almoxarifado</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $itens as $item )
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>R$ {{ $item->valor }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>{{ $item->almoxarifado->nome }}</td>
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
@stop
