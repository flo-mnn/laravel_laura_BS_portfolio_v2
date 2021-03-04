<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('socials.update',['social' => $social]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="icon" class="text-capitalize">icon</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="icon" name="icon" value="{{old('icon') ? old('icon') : $social->icon}}">
    </div>
    <div class="form-group">
      <label for="url" class="text-capitalize">url</label>
      <input type="url" class="form-control rounded-0 bg-light text-warning" id="url" name="url" value="{{old('url') ? old('url') : $social->url}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>