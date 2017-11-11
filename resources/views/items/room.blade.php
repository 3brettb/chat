<li class="room">
    <a class="name pull-left" href="{{route('room.show', $room)}}">{{$room->name}}</a>
    <span class="owner pull-right">{{$room->user->name}}</span>
</li>