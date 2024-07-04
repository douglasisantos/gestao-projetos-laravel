@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Nova Tarefa</h1>
    <form method="POST" action="{{ route('projects.tasks.store', $project) }}">
        @csrf
        <div class="form-group">
            <label for="title">Título da Tarefa</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar Tarefa</button>
    </form>
</div>
@endsection
