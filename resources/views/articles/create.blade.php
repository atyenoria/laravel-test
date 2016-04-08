
@extends('pages.layout')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>



    @include('errors.form_errors')

    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.form', ['published_at' => $test['now']->format('Y-m-d'), 'submitButton' => $test['now']])
    {!! Form::close() !!}

@endsection