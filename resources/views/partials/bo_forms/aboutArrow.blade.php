<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('about_arrows.update',['about_arrow' => $about_arrow]) }}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @method('PATCH')
    <div class="form-group">
      <label for="title" class="text-capitalize">title</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $about_arrow->title}}">
    </div>
    <div class="form-group">
      <label for="info" class="text-capitalize">info</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="info" name="info" value="{{old('info') ? old('info') : $about_arrow->info}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>