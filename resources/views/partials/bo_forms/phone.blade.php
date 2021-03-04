<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('phones.update',['phone' => $phone]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="phone" class="text-capitalize">phone</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="phone" name="phone" value="{{old('phone') ? old('phone') : $phone->phone}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>