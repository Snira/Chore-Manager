@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="">
                            <table class="table">
                                <tr>
                                    <th> Chore</th>
                                    <th>Description</th>
                                </tr>
                                @foreach($chores as $chore)
                                    <tr>
                                        <td>{{$chore->name}}</td>
                                        <td>
                                            {{$chore->description}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </form>
                        <a href="{{route('chore.create')}}">Create Chore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection