<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('experiences.update',['experience' => $experience]) }}" method="POST">
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
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $experience->title}}">
    </div>
    <div class="form-group">
      <label for="start_date" class="text-capitalize">start_date</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="start_date" name="start_date" value="{{old('start_date') ? old('start_date') : $experience->start_date}}">
    </div>
    <div class="form-group">
      <label for="end_date" class="text-capitalize">end_date</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="end_date" name="end_date" value="{{old('end_date') ? old('end_date') : $experience->end_date}}">
    </div>
    <div class="form-group">
      <label for="place" class="text-capitalize">place</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="place" name="place" value="{{old('place') ? old('place') : $experience->place}}">
    </div>
    <div class="form-group">
      <label for="task1" class="text-capitalize">task1</label>
      <textarea class="form-control rounded-0 bg-light text-warning" id="task1" name="task1">{{old('task1') ? old('task1') : $experience->task1}}</textarea>
    </div>
    <div class="form-group">
      <label for="task2" class="text-capitalize">task2</label>
      <textarea class="form-control rounded-0 bg-light text-warning" id="task2" name="task2">{{old('task2') ? old('task2') : $experience->task2}}</textarea>
    </div>
    <div class="form-group">
      <label for="task3" class="text-capitalize">task3</label>
      <textarea class="form-control rounded-0 bg-light text-warning" id="task3" name="task3">{{old('task3') ? old('task3') : $experience->task3}}</textarea>
    </div>
    <div class="form-group">
      <label for="task4" class="text-capitalize">task4</label>
      <textarea class="form-control rounded-0 bg-light text-warning" id="task4" name="task4">{{old('task4') ? old('task4') : $experience->task4}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>