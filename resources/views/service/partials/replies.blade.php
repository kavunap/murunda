@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->prefix }} {{ $comment->user->name }} {{ $comment->comment_type }}</strong> this request
    <p>{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    {{-- <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="service_id" value="{{ $service_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
        </div>
    </form> --}}
    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
    @include('service.partials.replies', ['comments' => $comment->replies])
</div>
@endforeach 