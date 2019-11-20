@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Career : {{$career->name}}</div>
        <div class="panel-body">
            <form action="{{route('careers.update',['id'=>$career->id])}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Job Title</label>
                    <input type="text" class="form-control" name="name" value="{{$career->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="6" cols="6"></textarea>
                </div>
                <input type="hidden" id="filler" value="{{$career->description}}">
                <button class="btn btn-primary btn-block">Update Career</button>
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
    <script>
        $(document).ready(function(){
            document.getElementById("description").value = document.getElementById("filler").value;
        });
    </script>
@stop