@extends('layouts.application')

@section('title', 'Home')


@section('content')
    <h1>Demo</h1>

    {!! Form::model(['action' => ['WelcomeController@create'], 'method' => 'post']) !!}
    {!! Form::text('title', null, ['class' => 'form-control typeit', 'placeholder' => __('Titre.')]) !!}
    {!! Form::text('body', null, ['class' => 'form-control typeit', 'placeholder' => __('Intitulé')]) !!}
    {!! Form::datetimeLocal('start_at', null, ['class' => 'form-control typeit', 'placeholder' => __('Répondez ici ...')]) !!}
    {!! Form::submit('Create', ['class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}
{{--    <form action="/" method="POST">--}}
{{--        {{csrf_field()}}--}}
{{--        <input type="text" name="title" placeholder="Title">--}}
{{--        <input type="text" name="body" placeholder="Body">--}}
{{--        <input type="datetime-local" name="date" placeholder="Title">--}}
{{--        <input type="submit" value="Add">--}}
{{--    </form>--}}

    @foreach($posts as $post)
        <article>
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <p>{!! $format_date($post) !!}</p>
            {!! Form::open(['route' => ['delete', $post->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}
            {!! Form::close() !!}
            {!! Form::open(['route' => ['editPage', $post->id], 'method' => 'get']) !!}
            {!! Form::submit('Modifiy', ['class'=> 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </article>
        <hr>
    @endforeach
@endsection


