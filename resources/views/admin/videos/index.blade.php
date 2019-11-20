@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>Video Statement</th>
                    <th>Video</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
                @foreach($videos as $video)
                    <tr>
                        <td>{{$video->name}}</td>
                        <td><iframe width="150" height="100" src="{{$video->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
                        <td><a class="btn btn-primary" href="{{route('videos.edit',['id'=>$video->id])}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{route('videos.destroy',['id'=>$video->id])}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop