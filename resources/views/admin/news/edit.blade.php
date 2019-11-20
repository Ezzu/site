@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit News : {{$news}}</div>
        <div class="panel-body">
            <form action="{{route('news_updates.done.editing',['id'=>$career->id])}}" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="form-group">
                    <label for="statement">Statement</label>
                    <textarea class="form-control" id="statement" name="statement" rows="" cols="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <button class="btn btn-primary btn-block">Update News</button>
            </form>
        </div>
    </div>
@stop

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#statement').summernote();
        });
    </script>
@stop