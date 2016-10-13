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
                                @foreach($chores as $chore)
                                    <th>{{$chore->name}}</th>
                                @endforeach
                            </tr>
                            </thead>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    @foreach($users as $user)
        <td>{{$user->name}}</td>


@endforeach