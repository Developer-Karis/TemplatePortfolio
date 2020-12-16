@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card w-50">
            <div class="card-header bg-teal">
                Contact Me
            </div>
            <form action="/update-email/{{$editContact->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Sujet</label>
                        <input type="text" name="newSujet" class="form-control w-50" value="{{$editContact->sujet}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="newEmail" class="form-control w-50" value="{{$editContact->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="newMessage" rows="4"
                            class="form-control w-50">{{$editContact->message}}</textarea>
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