<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._error')
    {{ csrf_field() }}
    <textarea name="content" rows="3" placeholder="聊聊新鲜事儿..." class="form-control"></textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>