@extends('layouts.layout')
@push('head')
    <title>Gestion des tâches</title>
@endpush

@section('layout-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <div class="h2">Liste des tâches</div>
            <a href="{{route('todo.create')}}" class="btn btn-primary">Ajouter une tâche</a>
        </div>

        <table class="table table-stripped table-dark">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due date</th>
                <th>Catégory</th>
                <th>Action</th>
            </tr>
            @foreach ($tasks as $task)
        
                <tr valign="middle">
                    <td>{{$task -> id}}</td>
                    <td>{{$task -> title}}</td>
                    <td>{{$task -> description}}</td>
                    <th><a href="" class="btn btn-success btn-sm">{{$task -> status}}</a></td>
                    <td>{{$task -> due_date}}</td>
                    <td>{{$task -> category_id}}</td>
                    <td>
                        <a href="{{route('todo.show', $task->id)}}" class="btn btn-success btn-sm">Lire</a>
                        <a href="{{route('todo.edit', $task->id)}}" class="btn btn-info btn-sm">Mettre à jour</a>
                        <a href="{{route('todo.destroy', $task->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection