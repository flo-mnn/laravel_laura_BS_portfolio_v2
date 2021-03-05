<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('about_numbers.update',['about_number' => $about_number]) }}" method="POST">
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
      <label for="icon" class="text-capitalize">icon</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="icon" name="icon" value="{{old('icon') ? old('icon') : $about_number->icon}}">
    </div>
    <div class="form-group">
      <label for="icon_color" class="text-capitalize">icon_color</label>
      <input type="color" class="form-control rounded-0 bg-light text-warning" id="icon_color" name="icon_color" value="{{old('icon_color') ? old('icon_color') : $about_number->icon_color}}">
    </div>
    <div class="form-group">
      <label for="number" class="text-capitalize">number</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="number" name="number" value="{{old('number') ? old('number') : $about_number->number}}">
    </div>
    <div class="form-group">
      <label for="emphasis" class="text-capitalize">emphasis</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="emphasis" name="emphasis" value="{{old('emphasis') ? old('emphasis') : $about_number->emphasis}}">
    </div>
    <div class="form-group">
      <label for="text" class="text-capitalize">text</label>
      <textarea class="form-control rounded-0 bg-light text-warning" id="text" name="text">{{old('text') ? old('text') : $about_number->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>