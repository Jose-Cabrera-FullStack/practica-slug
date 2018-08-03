@extends('layouts.app')

@section('title','Trainers Create')

@include('common.success')
@include('common.errors')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                 <label for="">Nombre</label>
                 <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                       </div>

                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>

              <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
@endsection
