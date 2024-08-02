@extends('layouts.layout')
@push('head')
    <title>Lire des tâches</title>
@endpush

@section('layout-section')
    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="h2">Lecture d'une tâche</div>
        <a href="{{ route('todo.index') }}" class="btn btn-primary">Retour</a>
    </div>
    <div class="card">
        <div class="card-header">Lecture du tâche n <sup>o</sup> {{$task -> id}}</div>
        <div class="card-body">
            <h5 class="card-title" value="{{$task->title}}">Title: {{$task -> title}} </h5>
            <p class="card-text" value="{{$task->description}}">Description: {{$task -> description}} </p>
            <p class="card-text" value="{{$task->status}}">Statut: {{$task -> status}} </p>
            <p class="card-text" value="{{$task->due_date}}">Due date: {{$task -> due_date}} </p>
            <p class="card-text" value="{{$task->category_id}}">Catégories: {{$task -> category_id}} </p>
        </div>
    </div>
@endsection
