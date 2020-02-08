@extends('layouts.app')

@section('content')


@include('partials.' . $episode->hosting. '-video-player')


@endsection