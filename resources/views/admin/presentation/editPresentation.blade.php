@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Modifier Presentation
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control" placeholder="Titre ..."
                        value="{{$update->titre}}">
                </div>
                <div class="form-group">
                    <label for="">Sous-Titre</label>
                    <input type="text" name="titre" class="form-control" placeholder="Sous-Titre ..."
                        value="{{$update->sous_titre}}">
                </div>
            </div>
            <div class="card-footer bg-teal">
                <a href="" class="btn bg-dark">Update</a>
            </div>
        </div>
    </div>
</div>
@stop