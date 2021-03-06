@extends('templates.main')
@section('content')
    @include('partials.hero')
    <section id="edithero" class="container">
        <div class="mt-5">
            <h1 class="bo" style="color: {{$color->color}}">Title & Subtitle</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$titles[0]->title}}</td>
                    <td>{{$titles[0]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[0]->id])}}" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="bo" style="color: {{$color->color}}">Change Theme Color</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Choose</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><span style="color: {{$color->color}}; font-family: 'Satisfy', serif;">Current Color</span></th>
                    <td><form action="/colors/{{$color->id}}" method="POST" id="themeColor" style="font-family: 'Satisfy', serif;">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="color" id="themeColorInputRGB" value="">
                        <input type="color" name="colorHex" id="themeColorInput" value="#ffffff" onchange="hexToRGB()">
                        {{-- <fieldset class="form-group">
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios1" value="warning">
                                  <label class="form-check-label text-capitalize text-warning" for="gridRadios1">
                                    Warning
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios2" value="primary">
                                  <label class="form-check-label text-capitalize text-primary" for="gridRadios2">
                                    Primary
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios3" value="danger">
                                  <label class="form-check-label text-capitalize text-danger" for="gridRadios3">
                                    Danger
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios3" value="success">
                                  <label class="form-check-label text-capitalize text-success" for="gridRadios3">
                                    success
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios3" value="secondary">
                                  <label class="form-check-label text-capitalize text-secondary" for="gridRadios3">
                                    secondary
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios3" value="dark">
                                  <label class="form-check-label text-capitalize text-dark" for="gridRadios3">
                                    dark
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="color" id="gridRadios3" value="info">
                                  <label class="form-check-label text-capitalize text-info" for="gridRadios3">
                                    info
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset> --}}
                    </form></td>
                    <td><input type="submit" form="themeColor" value="change" class="btn rounded-0 text-white" style="background-color: {{$color->color}}"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="bo" style="color: {{$color->color}}">Background Image</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td><img src="/storage/img/{{$page_images[0]->src}}" height="300"></td>
                    <td><a href="{{route('page_images.edit',['page_image' => $page_images[0]->id])}}" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection