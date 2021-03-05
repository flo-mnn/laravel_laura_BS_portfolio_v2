<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('footers.update',['footer' => $footer]) }}" method="POST">
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
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $footer->title}}">
    </div>
    <div class="form-group">
      <label for="subtitle" class="text-capitalize">subtitle</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="subtitle" name="subtitle" value="{{old('subtitle') ? old('subtitle') : $footer->subtitle}}">
    </div>
    <div class="form-group">
      <label for="copyright" class="text-capitalize">copyright</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="copyright" name="copyright" value="{{old('copyright') ? old('copyright') : $footer->copyright}}">
    </div>
    <div class="form-group">
      <label for="designed" class="text-capitalize">designed by text</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="designed" name="designed" value="{{old('designed') ? old('designed') : $footer->designed}}">
    </div>
    <div class="form-group">
      <label for="link_name" class="text-capitalize">Designer name</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="link_name" name="link_name" value="{{old('link_name') ? old('link_name') : $footer->link_name}}">
    </div>
    <div class="form-group">
      <label for="link" class="text-capitalize">Designer link</label>
      <input type="url" class="form-control rounded-0 bg-light text-warning" id="link" name="link" value="{{old('link') ? old('link') : $footer->link}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>