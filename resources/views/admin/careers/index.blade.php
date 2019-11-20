@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>SrNo</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
                @foreach($careers as $career)
                    <tr>
                        <td>{{$career->id}}</td>
                        <td>{{$career->name}}</td>
                        <td>{{$career->description}}</td>
                        <td><a class="btn btn-primary" href="{{route('careers.edit',['id'=>$career->id])}}">Edit</a></td>
                        <td>
                            <form action="{{ route('careers.destroy', ['id'=>$career->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop