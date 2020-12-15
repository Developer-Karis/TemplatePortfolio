@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-25">
            <div class="card-header bg-teal">
                Modifier Presentation
            </div>
            @foreach ($editPres as $item)
            <form action="/update-pres/{{$item->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="newTitre" class="form-control" placeholder="Titre ..."
                            value="{{$item->titre}}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-Titre</label>
                        <input type="text" name="newSousTitre" class="form-control" placeholder="Sous-Titre ..."
                            value="{{$item->sous_titre}}">
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark">Update</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@stop