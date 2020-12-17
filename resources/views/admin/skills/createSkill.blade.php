@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-25">
            <div class="card-header bg-teal">
                Créer un Skill
            </div>
            <form action="/store-skill" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nomSkill" class="form-control w-75">
                    </div>
                    <div class="form-group">
                        <label for="">Niveau Acquis, Entre 0 et 100 %</label>
                        <input type="number" name="pourcentage" class="form-control w-25">
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