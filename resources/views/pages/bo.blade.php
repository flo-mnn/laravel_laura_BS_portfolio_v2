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
                        <div class="form-group">
                          <label for="themeColorInputRGB" id="regularRGBLabel">Regular Color</label>
                          <input type="text" name="color" id="themeColorInputRGB" value="">
                        </div>
                        <div class="form-group">
                            <label for="themeColorInputRGBHover" id="hoverRGBLabel">Effects Color</label>
                            <input type="text" name="color_effects" id="themeColorInputRGBHover" value="">
                        </div>
                        <div class="form-group">
                          <input type="color" name="colorHex" id="themeColorInput" value="{{$color->colorHex}}" onchange="hexToRGB()">
                        </div>
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