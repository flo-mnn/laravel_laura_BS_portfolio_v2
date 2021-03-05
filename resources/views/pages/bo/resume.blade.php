@extends('templates.main')
@section('content')
    @include('partials.resume')
    <section id="editResume" class="container">
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
            <h1 class="text-warning bo">Summary</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Text</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$resume_summaries->name}}</td>
                    <td>{{$resume_summaries->text}}</td>
                    <td>{{$resume_summaries->address}}</td>
                    <td>{{$resume_summaries->phone}}</td>
                    <td>{{$resume_summaries->email}}</td>
                    <td><a href="{{route('resume_summaries.edit',['resume_summary' => $resume_summaries])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h1 class="text-warning bo">Education</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Place</th>
                    <th scope="col">Text</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($education as $education_item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$education_item->title}}</td>
                    <td>{{$education_item->start_date}}</td>
                    <td>{{$education_item->end_date}}</td>
                    <td>{{$education_item->place}}</td>
                    <td>{{$education_item->text}}</td>
                    <td><a href="{{route('education.edit',['education' => $education_item])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/education/{{$education_item->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="7">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/education" method="POST">
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
                              <label for="start_date" class="text-capitalize">start_date</label>
                              <input type="number" class="form-control rounded-0 bg-light text-warning" id="start_date" name="start_date" value="{{old('start_date')}}">
                            </div>
                            <div class="form-group">
                              <label for="end_date" class="text-capitalize">end_date</label>
                              <input type="number" class="form-control rounded-0 bg-light text-warning" id="end_date" name="end_date" value="{{old('end_date')}}">
                            </div>
                            <div class="form-group">
                              <label for="place" class="text-capitalize">place</label>
                              <input type='text' class="form-control rounded-0 bg-light text-warning" id="place" name="place" value="{{old('place')}}">
                            </div>
                            <div class="form-group">
                              <label for="text" class="text-capitalize">text</label>
                              <textarea type="text" class="form-control rounded-0 bg-light text-warning" id="text" name="text">{{old('text')}}</textarea>
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
            <h1 class="text-warning bo">Work Experience</h1>
            <table class="table table-striped table-dark">
                <thead class="thead-warning">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Place</th>
                    <th scope="col">Task1</th>
                    <th scope="col">Task2</th>
                    <th scope="col">Task3</th>
                    <th scope="col">Task4</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($experiences as $experience)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$experience->title}}</td>
                    <td>{{$experience->start_date}}</td>
                    <td>{{$experience->end_date}}</td>
                    <td>{{$experience->place}}</td>
                    <td>{{$experience->task1}}</td>
                    <td>{{$experience->task2}}</td>
                    <td>{{$experience->task3}}</td>
                    <td>{{$experience->task4}}</td>
                    <td><a href="{{route('experiences.edit',['experience' => $experience])}}" class="btn btn-warning rounded-0 text-light">edit</a></td>
                    <td><form action="/experiences/{{$experience->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-0 text-light">delete</button>
                    </form></td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row"><i class="bx bx-list-plus"></i></th>
                    <th colspan="10">
                        <form class="p-5 rounded-0 bg-dark text-light" action="/experiences" method="POST">
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
                              <label for="start_date" class="text-capitalize">start_date</label>
                              <input type="number" class="form-control rounded-0 bg-light text-warning" id="start_date" name="start_date" value="{{old('start_date')}}">
                            </div>
                            <div class="form-group">
                              <label for="end_date" class="text-capitalize">end_date</label>
                              <input type="number" class="form-control rounded-0 bg-light text-warning" id="end_date" name="end_date" value="{{old('end_date')}}">
                            </div>
                            <div class="form-group">
                              <label for="place" class="text-capitalize">place</label>
                              <input type="text" class="form-control rounded-0 bg-light text-warning" id="place" name="place" value="{{old('place')}}">
                            </div>
                            <div class="form-group">
                              <label for="task1" class="text-capitalize">task1</label>
                              <textarea class="form-control rounded-0 bg-light text-warning" id="task1" name="task1">{{old('task1')}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="task2" class="text-capitalize">task2</label>
                              <textarea class="form-control rounded-0 bg-light text-warning" id="task2" name="task2">{{old('task2')}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="task3" class="text-capitalize">task3</label>
                              <textarea class="form-control rounded-0 bg-light text-warning" id="task3" name="task3">{{old('task3')}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="task4" class="text-capitalize">task4</label>
                              <textarea class="form-control rounded-0 bg-light text-warning" id="task4" name="task4">{{old('task4')}}</textarea>
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