@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Chat Room: <b>{{$room->name}}</b></span>
                        <span class="pull-right">
                            <a href="{{route('room.index')}}">Rooms</a>
                        </span>
                    </div>

                    <div class="panel-body">

                        <ul class="messages">
                            @each('items.message', $messages, 'message', 'items.message-empty')
                        </ul>

                    </div>

                    <div class="panel-footer">

                        @include('forms.message-create', ['room' => $room])

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection