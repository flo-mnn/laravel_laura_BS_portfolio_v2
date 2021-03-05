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
    @include('partials.contact')
    <section id="editContact" class="container">
        <div class="mt-5">
            <h1 class="text-warning bo">Title & Subtitle</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
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
                    <td>{{$titles[4]->title}}</td>
                    <td>{{$titles[4]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[4]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Social Media Items</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
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
                    <td><a href="{{route('socials.edit',['social' => $social])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
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
                              <input type="text" class="form-control rounded-0 bg-light text-warning" id="icon" name="icon" value="{{old('icon')}}" aria-describedby="iconHelp">
                              <small id="iconHelp" class="form-text text-muted">Please visit <a href="https://boxicons.com/">BoxIcons</a>, filter for logos, and enter your icon name</small>

                            </div>
                            <div class="form-group">
                              <label for="url" class="text-capitalize">url</label>
                              <input type="url" class="form-control rounded-0 bg-light text-warning" id="url" name="url" value="{{old('url')}}">
                            </div>
                            <button type="submit" class="btn btn-warning rounded-0 text-light">Add</button>
                        </form>
                    </th>
                    <th></th>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Email(s)</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($emails as $email)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$email->email}}</td>
                    <td><a href="{{route('emails.edit',['email' => $email])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/emails/{{$email->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="3">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/emails" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="email" class="text-capitalize">email</label>
                              <input type="email" class="form-control rounded-0 bg-light text-warning" id="email" name="email" value="{{old('email')}}">
                            </div>
                            <button type="submit" class="btn btn-warning rounded-0 text-light">Add</button>
                        </form>
                    </th>
                    <th></th>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Phone Number(s)</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($phones as $phone)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$phone->phone}}</td>
                    <td><a href="{{route('phones.edit',['phone' => $phone])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/phones/{{$phone->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="3">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/phones" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="phone" class="text-capitalize">phone</label>
                              <input type="text" class="form-control rounded-0 bg-light text-warning" id="phone" name="phone" value="{{old('phone')}}">
                            </div>
                            <button type="submit" class="btn btn-warning rounded-0 text-light">Add</button>
                        </form>
                    </th>
                    <th></th>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection