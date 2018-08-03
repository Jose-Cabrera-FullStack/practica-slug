@extends('layouts.app')

@section('title','Trainer Edit')

@section('content')
@include('common.success')
        <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                 <label for="">Nombre</label>
                <input type="text" name="name" value="{{$trainer->name}}"class="form-control">
                </div>
                <div class="form-group">
                        <label for="">slug</label>
                       <input type="text" name="slug" value="{{$trainer->slug}}"class="form-control">
                       </div>

                <img style="height: 100px; width: 100px; backgroud-color: #EFEFEF; margin: 20px;" class="card-img-top   rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">

                <div class="form-group">
                    
                    <label for="">Avatar</label>
                    <input type="file" name="avatar">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
                </div>

              <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
@endsection
