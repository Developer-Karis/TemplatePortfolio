@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Tous les Emails
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Sujet</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emails as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->sujet}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <a href="/edit-email/{{$item->id}}" class="btn btn-primary mr-2">Edit</a>
                                <a href="/delete-email/{{$item->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop