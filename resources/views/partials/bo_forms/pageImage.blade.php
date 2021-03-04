<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('page_images.update',['page_image' => $page_image]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="image" class="text-capitalize">image</label>
      <input type="file" class="form-control rounded-0 bg-light text-warning" id="image" name="src" value="{{old('src') ? old('src') : $page_image->src}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>

</form>