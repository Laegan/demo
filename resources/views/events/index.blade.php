@extends('layouts.application')

@section('content')
<h1>Event</h1>
    <ul>
        @foreach($events as $event)
            <li>{{ $event }}</li>
        @endforeach
    </ul>
@endsection

