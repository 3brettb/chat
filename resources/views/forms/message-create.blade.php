<form class="form-horizontal message-create" method="POST" action="{{ route('room.message', $room) }}">
    {{ csrf_field() }}

    <div class="form-group">
        <textarea id="content" type="text" class="form-control" name="content" style="min-height:60px; max-height:120px; border: none;" required></textarea>
        <button type="submit" class="btn btn-primary">
            Post
        </button>
    </div>

</form>