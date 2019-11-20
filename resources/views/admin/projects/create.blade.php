@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Add Project</div>
        <div class="panel-body">
            <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="statement">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <button class="btn btn-primary btn-block">Add Project</button>
            </form>
        </div>
    </div>
@stop
