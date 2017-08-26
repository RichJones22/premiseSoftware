@extends('layouts.master')

@section('content')

    <div id="app">
        @include('sections.banner');

        @include('sections.about')

        @include('sections.poles-first')

        @include('sections.portfolio')

        @include('sections.poles-second')

        @include('sections.contact')

        @include('sections.footer')
    </div>

@endsection
