<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('navlinks.update',['navlink' => $navlink]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="link" class="text-capitalize">link</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="link" name="link" value="{{old('link') ? old('link') : $navlink->link}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>