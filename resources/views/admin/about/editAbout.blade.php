@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-25">
            <div class="card-header bg-teal">
                Modifier About
            </div>
            @foreach ($editAbout as $item)
            <form action="/update-about/{{$item->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="nameAbout" class="form-control" placeholder="Titre ..."
                            value="{{$item->titre}}">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="newImageAbout" class="form-control border-0 p-0">
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