@extends('templates.main')
@section('content')
    @include('partials.header')
    <section id="editFooter" class="container">
    <div class="mt-5">
            <h1 class="text-{{$color->color}} bo">Navigation Links</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-{{$color->color}}">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Navigation Link</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($navlinks as $navlink)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$navlink->link}}</td>
                    <td><a href="{{route('navlinks.edit',['navlink' => $navlink])}}" class="btn btn-{{$color->color}} rounded-0 text-light">edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection