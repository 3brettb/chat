@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Chat Rooms</span>
                        <span class="pull-right">
                            <a href="{{route('room.create')}}">Create a Room</a>
                        </span>
                    </div>

                    <div class="panel-body">

                        <ul class="rooms">
                            @each('items.room', $rooms, 'room', 'items.room-empty')
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection