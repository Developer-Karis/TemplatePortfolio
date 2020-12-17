@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Tous les Skills
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Pourcentage</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->pourcentage}} %</td>
                            <td>
                                <a href="/edit-skill/{{$item->id}}" class="btn btn-primary mr-2">Edit</a>
                                <a href="/delete-skill/{{$item->id}}" class="btn btn-danger">Delete</a>
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