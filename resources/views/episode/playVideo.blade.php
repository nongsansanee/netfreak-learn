@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container mt-5" >
    
        <h1 class="py-5">
           TITILE: {{$episode->title}}
        </h1>
    
        @include('partials.' . $episode->hosting. '-video-player')
        
        <div class="mt-4">
            <a
            class="btn btn-info"
            href="{{ url('/series/' . $episode->serie_id )}}"
             >กลับ</a>
       
        </div>
      
    
</div>




@endsection