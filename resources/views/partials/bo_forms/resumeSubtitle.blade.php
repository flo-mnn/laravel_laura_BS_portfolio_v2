<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('resume_subtitles.update',['resume_subtitle' => $resume_subtitle]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="title" class="text-capitalize">title</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $resume_subtitle->title}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>