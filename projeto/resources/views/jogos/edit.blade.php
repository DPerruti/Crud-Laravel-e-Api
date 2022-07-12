@extends('layout.app')

@section('title', 'Edição de Jogo')
@section('content')
<div class="container mt-5">
    <h1>Editar um novo jogo</h1>
    <hr/>
    <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="post">
        <!-- @csrf //falsificacao de sua estacao entre os site -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome">
        </div>
        <div class="form-group">
            <label for="nome">Ano:</label>
            <input type="text" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}"  placeholder="Digite um ano">
        </div>
        <div class="form-group">
            <label for="nome">Valor:</label>
            <input type="text" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite um valor">
        </div>
        <hr/>
        <div class="form-group">
            <input type="submit" value="Atualizar" class="btn btn-success">
        </div>
    </form>
</div>
@endsection