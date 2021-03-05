<form class="p-5 rounded-0 bg-dark text-light" action="{{ route('about_digital_skills.update',['about_digital_skill' => $about_digital_skill]) }}" method="POST">
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
      <label for="skill" class="text-capitalize">skill</label>
      <input type="text" class="form-control rounded-0 bg-light text-warning" id="skill" name="skill" value="{{old('skill') ? old('skill') : $about_digital_skill->skill}}">
    </div>
    <div class="form-group">
      <label for="percentage" class="text-capitalize">percentage</label>
      <input type="number" class="form-control rounded-0 bg-light text-warning" id="percentage" name="percentage" value="{{old('percentage') ? old('percentage') : $about_digital_skill->percentage}}">
    </div>
    <button type="submit" class="btn btn-warning rounded-0 text-light">Update</button>
</form>