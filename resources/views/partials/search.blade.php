<br>
<form action="{{ route('todo.search') }}">
    <div class="input-group mb-3">
        <input type="text" name="q" value="{{ request()->q ?? '' }}"class="form-control" placeholder="Rechercher" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <button type="button" class="btn btn-dark">Rechercher</button>
    </div>
</form>



