@foreach($items as $item)
    <!-- Комментарий (уровень 1) -->
    @if($item->parent_id)
        <div class="media">
        @else
        <li class="media">
    @endif
        <div class="media-left">
            <a href="#">
                <img class="media-object img-rounded" src="https://itchief.ru/examples/images/avatar2.jpg">
            </a>
        </div>
        <div class="media-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="author">Cat</div>
                    <div class="metadata">
                        <span class="date">{{ isset($item->created_at) ? $item->created_at : ''}}</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media-text text-justify">{{$item->body}}</div>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-warning" href="{{ route('comments.edit', ['comment' => $item->id]) }}">Редактировать</a>
                    <form style="display: inline-block" action="{{ route('comments.destroy', ['comment' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
                @include('comments.form')
            </div>


            @if(isset($comments[$item->id]))
                <!-- Вложенного комментарий -->
                @include('comments.comment', ['items'=>$comments[$item->id]])
                 <!-- Конец вложенного комментария -->
            @endif
        </div>

    @if($item->parent_id)
        </div>
    @else
        </li>
    @endif
    <!-- Конец комментария (уровень 1) -->

@endforeach
