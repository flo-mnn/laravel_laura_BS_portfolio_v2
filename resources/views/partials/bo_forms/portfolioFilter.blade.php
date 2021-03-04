<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('portfolio_filters.update',['portfolio_filter' => $portfolio_filter]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="filter" class="text-capitalize">filter</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="filter" name="filter" value="{{old('filter') ? old('filter') : $portfolio_filter->filter}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>