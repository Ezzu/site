@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>Image</th>
                    <th>Project Name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->name}}</td>
                        <td><img src="{{asset($project->featured)}}" style="width: 70px;height: 50px;"></td>
                        <td><a class="btn btn-primary" href="{{route('projects.edit',['id'=>$project->id])}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{route('projects.destroy',['id'=>$project->id])}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop