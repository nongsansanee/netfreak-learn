@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container mt-5">
    <h1 class="py-3">{{ $serie->title }}</h1>
    <a
        class="btn btn-info"
        href="{{ url('/series/' . $serie->id . '/episodes/create') }}"
    >เพิ่มตอน</a>

    <ul>
        @foreach($serie->episodes as $episode)
        <li>
            <a href="{{url('/play/'.$episode->id)}}">{{ $episode->title }}</a>
        </li>
        @endforeach
    </ul>
</div>

@endsection