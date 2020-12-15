@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Tous les Projects
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td><img src="{{asset('mesImages/'. $item->src)}}" height="150" width="200" alt=""></td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->tags}}</td>
                            <td>
                                <a href="/edit-project/{{$item->id}}" class="btn btn-primary mr-2">Edit</a>
                                <a href="/delete-project/{{$item->id}}" class="btn btn-danger">Delete</a>
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