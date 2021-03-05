@extends('templates.main')
@section('content')
    @include('partials.resume')
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
                <td>{{$titles[2]->title}}</td>
                <td>{{$titles[2]->subtitle}}</td>
                <td><a href="{{route('titles.edit',['title' => $titles[2]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        <h1 class="text-warning bo">Resume Subtitles</h1>
        <table class="table table-striped table-dark">
            <thead class="thead-warning">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subtitle</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($resume_subtitles as $resume_subtitle)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$resume_subtitle->title}}</td>
                <td><a href="{{route('resume_subtitles.edit',['resume_subtitle' => $resume_subtitle])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
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
                <td>{{$resume_summary->title}}</td>
                <td>{{$resume_summary->subtitle}}</td>
                <td><a href="{{route('titles.edit',['title' => $resume_summary])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection