<li class="message">
    <span class="user">{{$message->user->name}}</span>
    <span class="time">{{$message->created_at}}</span>
    <div class="content">
        {!! nl2br($message->content) !!}
    </div>
</li>