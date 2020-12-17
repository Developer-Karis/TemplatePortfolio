@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-50">
            <div class="card-header bg-teal">
                Changer l'Image du Carousel
            </div>
            <form action="/update-carousel/{{$editCarousel->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <img src="{{asset('mesImages/'.$editCarousel->src)}}" alt="" height="250" class="mb-5">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="newImageCarousel" class="form-control w-50 p-0 border-0">
                    </div>
                </div>
                <div class="card-footer bg-teal">
                    <button type="submit" class="btn bg-dark text-capitalize">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop