@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>SrNo</th>
                    <th>News</th>
                    <th>Date Created</th>
                    <th>Image</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
                @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->statement}}</td>
                        <td>{{$new->created_at}}</td>
                        <td><img src="{{asset($new->featured)}}" style="width: 70px;height: 50px;"></td>
                        <td><a class="btn btn-primary" href="{{route('news_updates.edit',['id'=>$new->id])}}">Edit</a></td>
                        <td>
                            <form action="{{ route('news_updates.destroy', ['id'=>$new->id]) }}" method="POST">
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