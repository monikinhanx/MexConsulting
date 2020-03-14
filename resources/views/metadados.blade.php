@extends('layout.index')

@section('titulo', 'Quantidade de Arquivos')

@section('conteudo')
    <p class="lead text-muted mb-3">Você está enviando {{$qtd}} interações de Chat.</p>
    <p class="lead text-muted mb-3">Confirma o upload dessas interações para a API da CallMiner?</p>
    <form action="/api" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="metadados" id="metadados" hidden>{{json_encode($resultado)}}</textarea>
        </div>
        <a href="/home" class="btn btn-mex">Voltar</a>
        <button type="submit" class="btn btn-mex">Confirmo</button>
    </form>
@endsection