<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Комментарий</label>
        @if (isset($item->id))
            <input name="parent_id" type="hidden" value="{{ $item->id }}">
        @endif
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body" required></textarea>
    </div>
    <button type="submit" class="btn btn-success btn-sm">Комментировать</button>
</form>
