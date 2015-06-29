@extends('layout.base')

@section('corpo')
<div class="ui segment">
    <div class="ui breadcrumb">
        <a class="section">Home</a>
        <i class="right chevron icon divider"></i>
        <a class="section">Registration</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Personal Information</div>
    </div>
</div>
<div class="ui segment">
    <h2 class="ui header">
        <i class="cubes icon"></i>
        <div class="content">
            Almoxarifados
        </div>
    </h2>

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
                    <td><i class="search icon"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
