@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-50">
            <div class="card-header bg-teal">
                Modifier un Project
            </div>
            <form action="/update-project/{{$edit->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nom du Projet</label>
                        <input type="text" name="newName" class="form-control" value="{{$edit->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="newImage" class="form-control border-0 p-0" value="{{$edit->src}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="newDescription" rows="4" class="form-control">{{$edit->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tags</label>
                        <select name="newTag" class="form-control" style="width: max-content;">
                            <option value="Création de site internet">Création de site internet</option>
                            <option value="Impression Digitale">Impression Digitale</option>
                            <option value="Retouches Photo">Retouches Photo</option>
                            <option value="Montage vidéo">Montage vidéo</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop