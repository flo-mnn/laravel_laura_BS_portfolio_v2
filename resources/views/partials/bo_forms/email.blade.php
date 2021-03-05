<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('emails.update',['email' => $email]) }}" method="POST">
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
      <label for="email" class="text-capitalize">email</label>
      <input type="email" class="form-control rounded-0 bg-light text-warning" id="email" name="email" value="{{old('email') ? old('email') : $email->email}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>