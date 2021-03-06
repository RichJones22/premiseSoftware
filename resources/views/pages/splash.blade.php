@extends('layouts.master')

@section('content')

    @include('sections.banner')

    @include('sections.about')

    @include('sections.poles-first')

    @include('sections.portfolio')

    @include('sections.poles-second')

    <div id="app">
        @include('sections.contact')

        @include('sections.footer')
    </div>

@endsection
