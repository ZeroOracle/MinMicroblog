<li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id )}}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    </a>
    <span class="user">
    <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
  </span>
    <span class="timestamp">

      {{--将日期进行友好化处理--}}
    {{ $status->created_at->diffForHumans() }}
  </span>
    <span class="content">{{ $status->content }}</span>
  {{--按钮必须是微博的作者本人才能看到，利用 Laravel 授权策略提供的 @can Blade 命令，在 Blade 模板中做授权判断。--}}
    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <script>
                function del() {
                    if (confirm("确定要删除吗？")) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>

            <button onclick="del()" type="submit" class="btn btn-sm btn-danger status-delete-btn">删除</button>
        </form>
    @endcan
</li>