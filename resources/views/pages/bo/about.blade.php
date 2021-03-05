@extends('templates.main')
@section('content')
    @include('partials.about')
    <section id="editAbout" class="container">
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
                    <td>{{$titles[1]->title}}</td>
                    <td>{{$titles[1]->subtitle}}</td>
                    <td><a href="{{route('titles.edit',['title' => $titles[1]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Me Image</h1>
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
                    <td><img src="/storage/img/{{$page_images[1]->src}}" height="300"></td>
                    <td><a href="{{route('page_images.edit',['page_image' => $page_images[1]->id])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">About Arrows</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Info Title</th>
                    <th scope="col">Info</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about_arrows as $about_arrow)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$about_arrow->title}}</td>
                            <td>{{$about_arrow->info}}</td>
                            <td><a href="{{route('about_arrows.edit',['about_arrow' => $about_arrow])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">About Numbers</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon Name</th>
                    <th scope="col">Icon Color</th>
                    <th scope="col">Number</th>
                    <th scope="col">Text First Words</th>
                    <th scope="col">Rest of the Text</th>
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
                            <td><a href="{{route('about_numbers.edit',['about_number' => $about_number])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">About Digital Skills</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Info Title</th>
                    <th scope="col">Info</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about_digital_skills as $about_digital_skill)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$about_digital_skill->skill}}</td>
                            <td>{{$about_digital_skill->percentage}}</td>
                            <td><a href="{{route('about_digital_skills.edit',['about_digital_skill' => $about_digital_skill])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection