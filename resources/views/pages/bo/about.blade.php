@extends('templates.main')
@section('content')
    @if ($errors->any())
    <div class="container">
        <div class="alert alert-danger" style="margin-top: 100px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    @include('partials.about')
    <section id="editAbout" class="container">
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
                    <td>{{$titles[1]->title}}</td>
                    <td>{{$titles[1]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[1]->id])}}" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="bo" style="color: {{$color->color}}">Me Image</h1>
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
                    <td><img src="/storage/img/{{$page_images[1]->src}}" height="300"></td>
                    <td><a href="{{route('page_images.edit',['page_image' => $page_images[1]->id])}}" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="bo" style="color: {{$color->color}}">About Arrows</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Info Title</th>
                    <th scope="col">Info</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about_arrows as $about_arrow)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$about_arrow->title}}</td>
                            <td>{{$about_arrow->info}}</td>
                            <td><a href="{{route('about_arrows.edit',['about_arrow' => $about_arrow])}}" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">edit</a></td>
                            <td><form action="/about_arrows/{{$about_arrow->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                            </form></td>
                        </tr>
                    @endforeach
                    <tr>
                        <th scope="row"><i class="bx bx-list-plus"></i></th>
                        <th colspan="4">
                            <form class="p-5 rounded-0 bg-dark text-light" action="/about_arrows" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="title" class="text-capitalize">title</label>
                                  <input type="text" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="title" name="title" value="{{old('title')}}">
                                </div>
                                <div class="form-group">
                                  <label for="info" class="text-capitalize">info</label>
                                  <input type="text" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="info" name="info" value="{{old('info')}}">
                                </div>
                                <button type="submit" style="background-color: {{$color->color}}" class="btn rounded-0 text-light">Add</button>
                            </form>
                        </th>
                        <th></th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-{{$color->color}} bo">About Numbers</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon Name</th>
                    <th scope="col">Icon Color</th>
                    <th scope="col">Number</th>
                    <th scope="col">Text First Words</th>
                    <th scope="col">Rest of the Text</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about_numbers as $about_number)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$about_number->icon}}</td>
                            <td>{{$about_number->icon_color}}</td>
                            <td>{{$about_number->number}}</td>
                            <td>{{$about_number->emphasis}}</td>
                            <td>{{$about_number->text}}</td>
                            <td><a href="{{route('about_numbers.edit',['about_number' => $about_number])}}" style="background-color: {{$color->color}}" class="btn rounded-0 text-light">edit</a></td>
                            <td><form action="/about_numbers/{{$about_number->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                            </form></td>
                        </tr>
                    @endforeach
                    <tr>
                        <th scope="row"><i class="bx bx-list-plus"></i></th>
                        <th colspan="7">
                            <form class="p-5 rounded-0 bg-dark text-light" action="/about_numbers" method="POST">
                                @csrf
                               
                                <div class="form-group">
                                  <label for="icon" class="text-capitalize">icon</label>
                                  <input type="text" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="icon" name="icon" value="{{old('icon')}}" aria-describedby="iconHelp">
                                  <small id="iconHelp" class="form-text text-muted">Please visit <a href="https://icofont.com/icons">Icofonts</a> and enter your icon name</small>

                                </div>
                                <div class="form-group">
                                  <label for="icon_color" class="text-capitalize">icon_color</label>
                                  <input type="color" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="icon_color" name="icon_color" value="{{old('icon_color')}}">
                                </div>
                                <div class="form-group">
                                  <label for="number" class="text-capitalize">number</label>
                                  <input type="number" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="number" name="number" value="{{old('number')}}">
                                </div>
                                <div class="form-group">
                                  <label for="emphasis" class="text-capitalize">emphasis</label>
                                  <input type="text" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="emphasis" name="emphasis" value="{{old('emphasis')}}">
                                </div>
                                <div class="form-group">
                                  <label for="text" class="text-capitalize">text</label>
                                  <textarea class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="text" name="text">{{old('text')}}</textarea>
                                </div>
                                <button type="submit" style="background-color: {{$color->color}}" class="btn rounded-0 text-light">Add</button>
                            </form>
                        </th>
                        <th></th>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-{{$color->color}} bo">About Digital Skills</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Info Title</th>
                    <th scope="col">Info</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about_digital_skills as $about_digital_skill)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$about_digital_skill->skill}}</td>
                            <td>{{$about_digital_skill->percentage}}</td>
                            <td><a href="{{route('about_digital_skills.edit',['about_digital_skill' => $about_digital_skill])}}" style="background-color: {{$color->color}}" class="btn rounded-0 text-light">edit</a></td>
                            <td><form action="/about_digital_skills/{{$about_digital_skill->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                            </form></td>
                        </tr>
                    @endforeach
                    <tr>
                        <th scope="row"><i class="bx bx-list-plus"></i></th>
                        <th colspan="4">
                            <form class="p-5 rounded-0 bg-dark text-light" action="/about_digital_skills" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="skill" class="text-capitalize">skill</label>
                                  <input type="text" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="skill" name="skill" value="{{old('skill')}}">
                                </div>
                                <div class="form-group">
                                  <label for="percentage" class="text-capitalize">percentage</label>
                                  <input type="number" class="form-control rounded-0 bg-light" style="color: {{$color->color}}" id="percentage" name="percentage" value="{{old('percentage')}}">
                                </div>
                                <button type="submit" class="btn rounded-0 text-light" style="background-color: {{$color->color}}">Add</button>
                            </form>
                        </th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection