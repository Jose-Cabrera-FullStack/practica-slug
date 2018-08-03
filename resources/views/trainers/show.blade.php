@extends('layouts.app')

@section('title','Trainer')

@section('content')
@include('common.success')
<img style="height: 100px; width: 100px; backgroud-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
    <div class="text-center">
        <h1>{{$trainer->name}}</h1>
        <h5 class="card-title">{{$trainer->description}}</h5>
    
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    <br>
    <br>

    <form class="form-group" action="/trainers/{{$trainer->slug}}" method="POST" >
        @csrf
        @method('DELETE')
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
</div>
@endsection

