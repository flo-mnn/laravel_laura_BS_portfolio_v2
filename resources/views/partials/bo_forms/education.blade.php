<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('education.update',['education' => $education]) }}" method="POST">
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
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $education->title}}">
    </div>
    <div class="form-group">
      <label for="start_date" class="text-capitalize">start_date</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="start_date" name="start_date" value="{{old('start_date') ? old('start_date') : $education->start_date}}">
    </div>
    <div class="form-group">
      <label for="end_date" class="text-capitalize">end_date</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="end_date" name="end_date" value="{{old('end_date') ? old('end_date') : $education->end_date}}">
    </div>
    <div class="form-group">
      <label for="place" class="text-capitalize">place</label>
      <input type='text' class="form-control rounded-0 bg-light text-warning" id="place" name="place" value="{{old('place') ? old('place') : $education->place}}">
    </div>
    <div class="form-group">
      <label for="text" class="text-capitalize">text</label>
      <textarea type="text" class="form-control rounded-0 bg-light text-warning" id="text" name="text">{{old('text') ? old('text') : $education->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>