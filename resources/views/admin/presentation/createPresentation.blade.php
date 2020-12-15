@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="/create-presentation" method="post">
            @csrf
            <div class="card">
                <div class="card-header bg-teal">
                    Créer une Présentation
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" class="form-control" placeholder="Titre ..." name="titre">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-Titre</label>
                        <input type="text" class="form-control" placeholder="Sous-Titre ..." name="sous_titre">
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark">Créer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop