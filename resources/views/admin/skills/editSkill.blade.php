@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-25">
            <div class="card-header bg-teal">
                Modifier un Skill
            </div>
            <form action="/update-skill/{{$editSkill->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="newNameSkill" class="form-control w-75" value="{{$editSkill->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="">Niveau Acquis, Entre 0 et 100 %</label>
                        <input type="number" name="newPourcentage" class="form-control w-25"
                            value="{{$editSkill->pourcentage}}">
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