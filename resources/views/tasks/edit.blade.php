@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarefa</h1>
    <form method="POST" action="{{ route('projects.tasks.update', [$project, $task]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título da Tarefa</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="to_do" {{ $task->status == 'to_do' ? 'selected' : '' }}>A Fazer</option>
                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>Em Progresso</option>
                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Concluída</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
