<form class="p-5 rounded-0 bg-dark text-light" action="/page_images/{{$page_image->id}}" method="POST" enctype="multipart/form-data">
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
      <label for="image" class="text-capitalize">image</label>
      <input type="file" class="form-control rounded-0 bg-light text-warning" id="image" name="src">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>

</form>