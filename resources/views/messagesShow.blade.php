<div class='card-deck card-bottom'>
    <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'>{{ $message->name}}</h5>
            <p class='card-text'>
                <small class="text-muted">{{ $message->location}}</small>
            </p>
            <p class='card-text'>{{ $message->story}}</p>
            <p>
            <p>
                @foreach($message->tags as $tag)
                    <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
                @endforeach
            </p>
            <form action='/messages/{{$message->id}}/delete' method='POST' class='alinks'>
                {{method_field('delete') }}
                {{ csrf_field() }}
                <input type='submit' class="btn btn-secondary btn-sm " Value='Delete'>

                {{--<a class='alinks' href='/messages/{{ $message->id }}/edit'><button type="button" class="btn btn-primary btn-sm">Edit</button></a>--}}

            </form>

            <form action='/messages/{{$message->id}}/edit' method='GET' class='alinks' >
                <input type='submit' class="btn btn-primary btn-sm " Value='Edit'>
            </form>

        </div>
    </div>

</div>


