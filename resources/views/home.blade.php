@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chore grouping of this week</div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="choretable">
                                <thead>
                                <tr>
                                    <th> - </th>
                                    @foreach($chores as $chore)
                                        <th>{{$chore->name}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Maandag</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Dinsdag</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Woensdag</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Donderdag</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Vrijdag</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>


                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

