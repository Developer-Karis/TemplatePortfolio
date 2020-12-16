@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-50">
            <div class="card-header bg-teal">
                Ajouter une Image dans le Carousel
            </div>
            <form action="/store-image-carousel" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Image du Carousel</label>
                        <input type="file" name="imageCarousel" class="form-control p-0 border-0">
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop