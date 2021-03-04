@extends('templates.main')
@section('content')
    <section class="mx-auto edit bg-dark">
        @include('partials.bo_forms.pageImage')
        <a href="{{url()->previous()}}" class="mx-5 btn btn-light text-dark rounded-0">Go back</a>
    </section>
@endsection