<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('resume_summaries.update',['resume_summary' => $resume_summary]) }}" method="POST">
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
      <label for="name" class="text-capitalize">name</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="name" name="name" value="{{old('name') ? old('name') : $resume_summary->name}}">
    </div>
    <div class="form-group">
        <label for="text" class="text-capitalize">text</label>
        <textarea type="text" class="form-control rounded-0 bg-light text-warning" id="text" name="text">{{old('text') ? old('text') : $resume_summary->text}}</textarea>
    </div>
    <div class="form-group">
      <label for="address" class="text-capitalize">address</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="address" name="address" value="{{old('address') ? old('address') : $resume_summary->address}}">
    </div>
    <div class="form-group">
      <label for="phone" class="text-capitalize">phone</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="phone" name="phone" value="{{old('phone') ? old('phone') : $resume_summary->phone}}">
    </div>
    <div class="form-group">
      <label for="email" class="text-capitalize">email</label>
      <input type="email" class="form-control rounded-0 bg-light text-warning" id="email" name="email" value="{{old('email') ? old('email') : $resume_summary->email}}">
    </div>
    
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>