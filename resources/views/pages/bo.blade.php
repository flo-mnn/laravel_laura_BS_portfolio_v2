@extends('templates.main')
@section('content')
    @include('partials.hero')
    <section id="edithero" class="container">
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
                    <td>{{$titles[0]->title}}</td>
                    <td>{{$titles[0]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[0]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Background Image</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
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
                    <td><a href="{{route('page_images.edit',['page_image' => $page_images[0]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection