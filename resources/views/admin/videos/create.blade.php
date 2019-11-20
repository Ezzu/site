@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Add Video</div>
        <div class="panel-body">
            <form action="{{route('videos.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="statement">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <button class="btn btn-primary btn-block">Add Video</button>
            </form>
        </div>
    </div>
@stop
