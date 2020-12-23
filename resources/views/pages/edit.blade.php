@extends('layouts.application')

@section('title', 'Edit')


@section('content')
    <h1>{{'Edition du : ' . $post->id}}</h1>
    <article>
        {!! Form::model($post, ['action' => ['WelcomeController@update', $post->id], 'method' => 'patch']) !!}
        {!! Form::text('title', null, ['class' => 'form-control typeit', 'placeholder' => __('Répondez ici ...')]) !!}
        <br>
        <br>
        {!! Form::text('body', null, ['class' => 'form-control typeit', 'placeholder' => __('Répondez ici ...')]) !!}
        <br>
        <br>
        {!! Form::datetimelocal( 'start_at' , $input_date($post), ['class' => 'form-control typeit']) !!}
        <br>
        <br>
        {{--        {!! Form::model($post, ['route' => ['edit', $post->id], 'method' => 'patch']) !!}--}}
        {{--        {!! Form::model($post, array('route' => array('edit', $post->id))) !!}--}}
        {!! Form::submit('Modify', ['class'=> 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </article>

@endsection
