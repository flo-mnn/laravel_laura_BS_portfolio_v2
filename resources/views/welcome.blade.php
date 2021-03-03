@extends('templates.main')
@section('content')
    @include('partials.hero')
    <main id="main">
        @include('partials.about')
        @include('partials.resume')
        @include('partials.portfolio')
        @include('partials.contact')
    </main>
@endsection