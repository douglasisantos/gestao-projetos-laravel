@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Projeto</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome do Projeto</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar Projeto</button>
    </form>
</div>
@endsection
