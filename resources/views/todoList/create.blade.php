@extends('layouts.layout')
@push('head')
    <title>Création d'une tâche</title>
@endpush

@section('layout-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <div class="h2">Créer une tâche</div>
            <a href="{{route('todo.index')}}" class="btn btn-primary">Retour</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{route('todo.store')}}" method="post">
                    @csrf
                    <label for="" class="form-label mt-4">Title</label>
                    <input type="text" name="title" id="" class="form-control">
                    <div class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Description</label>
                    <input type="text" name="description" id="" class="form-control">
                    <div class="text-danger">
                        @error('description')
                            {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value=""></option>
                        <option value="En cours">En cours</option>
                        <option value="Terminer">Terminer</option>
                    </select>
                    <div class="text-danger">
                        @error('status')
                            {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Catégory</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value=""></option>
                        <option value="Professionnel">Professionnel</option>
                        <option value="Personnel">Personnel</option>
                        <option value="Études">Études</option>
                        <option value="Ménage">Ménage</option>
                        <option value="Urgent et important">Urgent et important</option>
                        <option value="Important mais non urgent">Important mais non urgent</option>
                        <option value="Urgent mais non important">Urgent mais non important</option>
                        <option value="Ni urgent ni important">Ni urgent ni important</option>
                    </select>
                    <div class="text-danger">
                        @error('category_id')
                            {{$message}}
                        @enderror
                    </div>
                    <label for="" class="form-label mt-4">Due date</label>
                    <input type="date" name="due_date" id="" class="form-control">
                    <div class="text-danger">
                        @error('due_date')
                            {{$message}}
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg mt-4">Ajouter</button>
                </form>
            </div>
        </div>
        
    </div>
@endsection