@extends('layouts.app')
@section('content')
<form style="margin-left: 50px; margin-right: 50px" method="get" action="add">
    <br>
    @if ($sucesso)
    <div class="alert alert-success" role="alert">
        Registro realizado con éxito!
    </div>
    @endif
    <div class="form-group">
        <label for="nome">nombre</label>
        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Introduzca su E-mail">
    </div>


    <div class="form-group">
        <label for="telefone">Teléfono</label>
        <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Introduzca su Teléfono">
    </div>


    <div class="form-group">
        <label for="endereco">Endereco</label>
        <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="emailHelp" placeholder="Introduzca su Endereco">
    </div>


    <button type="submit" class="btn btn-primary">Cambiar</button>
    <a href="/contato/list" class="btn btn-primary" role="button" aria-pressed="true" style="">Listado</a>
</form>


@endsection