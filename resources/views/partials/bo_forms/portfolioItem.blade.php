<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('portfolio_items.update',['portfolio_item' => $portfolio_item]) }}" method="POST" enctype="multipart/form-data">
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
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title') ? old('title') : $portfolio_item->title}}">
    </div>
    <div class="form-group">
      <label for="cover_src" class="text-capitalize">cover_src</label>
      <input type="file" class="form-control rounded-0 bg-light text-warning" id="cover_src" name="cover_src">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
          @foreach ($portfolio_filters as $portfoliio_filter)
            @if ($portfoliio_filter->id != 1)
            <option value="{{$portfolio_filter->$filter}}">{{$portfolio_filter->$filter}}</option>
            @endif
          @endforeach
            <option value="other">other ("all" section)</option>
        </select>
    </div>
    <div class="form-group">
        <label for="url" class="text-capitalize">url</label>
        <input type="url" class="form-control rounded-0 bg-light text-warning" id="url" name="url" value="{{old('url') ? old('url') : $portfolio_item->url}}">
      </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>