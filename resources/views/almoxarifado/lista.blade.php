@extends('layout.base')

@section('corpo')
<table class="ui table">
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
                <td><i class="fa fa-search fw"></td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
