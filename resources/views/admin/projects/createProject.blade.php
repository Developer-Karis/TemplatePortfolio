@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-50">
            <div class="card-header bg-teal">
                Créer un Projet
            </div>
            <form action="/store-projects" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nom du Projet</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom du projet ...">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control border-0 p-0">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tags</label>
                        <select name="tags" class="form-control" style="width: max-content;">
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="Javascript">Javascript</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop