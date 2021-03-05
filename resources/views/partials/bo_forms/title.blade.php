<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('titles.update',['title' => $title]) }}" method="POST">
    @csrf
    @method('PATCH')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="title" class="text-capitalize">title</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $title->title}}">
    </div>
    <div class="form-group">
      <label for="subtitle" class="text-capitalize">subtitle</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="subtitle" name="subtitle" value="{{old('subtitle') ? old('subtitle') : $title->subtitle}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>