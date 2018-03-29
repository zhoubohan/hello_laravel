@if($user->id !== Auth::user()->id)
    <div id="follow_form">
        @if(Auth::user()->isFollowing($user->id))
            <form method="POST" action="{{ route('followers.destroy', $user->id) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm">取消关注</button>
            </form>
        @else
            <form action="{{ route('followers.store', $user->id) }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm btn-primary">关注</button>
            </form>
        @endif
    </div>
@endif