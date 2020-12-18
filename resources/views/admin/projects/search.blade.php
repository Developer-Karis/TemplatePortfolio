@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Tous les Projects
                <form action="/search" method="get" class="form-inline mx-2 justify-content-end">
                    <input type="hidden" name="_token" value="O5Kgk5E4lr3sufDWaAZ5iw8TweW0TjDKDjX4Hfl9">
                    <div class="input-group">
                        <input class="form-control form-control-navbar" type="search" name="query" placeholder="search"
                            aria-label="search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar btn-light bg-light" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Tag</th>
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
                            <td>{{$item->skills->nom}}</td>
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