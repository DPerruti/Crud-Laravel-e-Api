@extends('layout.app')

@section('title', 'Listagem')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Listagem de jogos</h1>
            </div>
            <div class="col-md-6">
                <a href="{{ route('jogos-create') }}" class="btn btn-success">Novo Jogo</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jogos as $jogo)
                    <tr>
                        <th scope="row">{{ $jogo->id }}</th>
                        <td>{{ $jogo->nome }}</td>
                        <td>{{ $jogo->ano_criacao }}</td>
                        <td>{{ $jogo->valor }}</td>
                        <td class="d-flex">
                            <a href="{{ route('jogos-edit', ['id' => $jogo->id]) }}" class="btn btn-primary me-2">Editar</a>
                            <form action="{{ route('jogos-destroy', ['id' => $jogo->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection