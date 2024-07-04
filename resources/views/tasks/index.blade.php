@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tarefas do Projeto: {{ $project->name }}</h1>
    <a href="{{ route('projects.tasks.create', $project) }}" class="btn btn-primary">Nova Tarefa</a>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
