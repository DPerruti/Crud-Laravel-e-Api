@extends('layout.app')

@section('title', 'Criação de Jogo')
@section('content')
<div class="container mt-5">
    <h1>Cadastrar um novo jogo</h1>
    <hr/>
    <form action="{{ route('jogos-store') }}" method="post">
        <!-- @csrf //falsificacao de sua estacao entre os site -->
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome">
        </div>
        <div class="form-group">
            <label for="nome">Ano:</label>
            <input type="text" class="form-control" name="ano_criacao" placeholder="Digite um ano">
        </div>
        <div class="form-group">
            <label for="nome">Valor:</label>
            <input type="text" class="form-control" name="valor" placeholder="Digite um valor">
        </div>
        <hr/>
        <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection