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
    @include('partials.footer')
    <section id="editFooter" class="container">
        <div class="mt-5">
            <h1 class="text-{{$color->color}} bo">Footer Infos</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Copyright Text</th>
                    <th scope="col">Designed By Text</th>
                    <th scope="col">Designer Name</th>
                    <th scope="col">Designer URL</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$footers->title}}</td>
                    <td>{{$footers->subtitle}}</td>
                    <td>{{$footers->copyright}}</td>
                    <td>{{$footers->designed}}</td>
                    <td>{{$footers->link_name}}</td>
                    <td>{{$footers->link}}</td>
                    <td><a href="{{route('footers.edit',['footer' => $footers])}}" class="btn btn-{{$color->color}} rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-{{$color->color}} bo">Social Media Items</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon Name</th>
                    <th scope="col">Social Media Link</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($socials as $social)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$social->icon}}</td>
                    <td>{{$social->url}}</td>
                    <td><a href="{{route('socials.edit',['social' => $social])}}" class="btn btn-{{$color->color}} rounded-0 text-light">edit</a></td>
                    <td><form action="/socials/{{$social->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="4">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/socials" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="icon" class="text-capitalize">icon</label>
                              <input type="text" class="form-control rounded-0 bg-light text-{{$color->color}}" id="icon" name="icon" value="{{old('icon') ? old('icon') : $social->icon}}" aria-describedby="iconHelp">
                                <small id="iconHelp" class="form-text text-muted">Please visit <a href="https://boxicons.com/">BoxIcons</a>, filter for logos, and enter your icon name</small>
                                
                            </div>
                            <div class="form-group">
                              <label for="url" class="text-capitalize">url</label>
                              <input type="url" class="form-control rounded-0 bg-light text-{{$color->color}}" id="url" name="url" value="{{old('url') ? old('url') : $social->url}}">
                            </div>
                            <button type="submit" class="btn btn-{{$color->color}} rounded-0 text-light">Add</button>
                        </form>
                    </th>
                    <th></th>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection