@extends('templates.main')
@section('content')
    @include('partials.portfolio')
    <section id="editPortfolio" class="container">
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
                    <td>{{$titles[3]->title}}</td>
                    <td>{{$titles[3]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[3]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Portfolio Filters & Categories</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Filter</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($portfolio_filters as $portfolio_filter)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$portfolio_filter->filter}}</td>
                    <td><a href="{{route('portfolio_filters.edit',['portfolio_filter' => $portfolio_filter])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/portfolio_filters/{{$portfolio_filter->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="3">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/portfolio_filters" method="POST">
                            @csrf
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
                              <label for="filter" class="text-capitalize">filter</label>
                              <input type="text" class="form-control rounded-0 bg-light text-warning" id="filter" name="filter" value="{{old('filter')}}">
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
            <h1 class="text-warning bo">Portfolio Items</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cover Image</th>
                    <th scope="col">Filter</th>
                    <th scope="col">Project Link</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($portfolio_items as $portfolio_item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$portfolio_item->title}}</td>
                    <td><img src="/storage/img/{{$portfolio_item->cover_src}}" width="100" alt=""></td>
                    <td>{{$portfolio_item->filter}}</td>
                    <td>{{$portfolio_item->url}}</td>
                    <td><a href="{{route('portfolio_items.edit',['portfolio_item' => $portfolio_item])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/portfolio_items/{{$portfolio_item->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="6">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/portfolio_items" method="POST" enctype="multipart/form-data">
                            @csrf
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
                              <input type="text" class="form-control rounded-0 bg-light text-warning" id="title" name="title" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                              <label for="cover_src" class="text-capitalize">cover_src</label>
                              <input type="file" class="form-control rounded-0 bg-light text-warning" id="cover_src" name="cover_src">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  @foreach ($portfolio_filters as $portfolio_filter_item)
                                    @if ($portfolio_filter_item->id != 1)
                                    <option value="{{$portfolio_filter_item->filter}}">{{$portfolio_filter_item->filter}}</option>
                                    @endif
                                  @endforeach
                                    <option value="other">other ("all" section)</option>
                                </select>
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
    </section>
@endsection