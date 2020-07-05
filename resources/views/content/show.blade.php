@extends('layouts.master')
@section('content')
        
        
        <div class="card">
                <div class="card-header">
                        <h5 class="card-title m-0">Title: {{$items->judul}}</h5>
                </div>
                <div class="card-body">
                        <p>Content: {{$items->isi}}</p>
                        <p>Slug: {{$items->slug}}</p>
                        <p>Tags: 
                        @if ($items->tag)
                        @foreach(explode(',', $items->tag) as $tag) 
                                <span class="btn btn-success btn-sm">{{$tag}}</span>
                        @endforeach
                        @endif</p>
                        <p>Created at: {{$items->create_at}}</p>
                        <p>Updated at: {{$items->updated_at}}<p>
      
                </div>
                <div>

                        <a href="{{url('/artikel')}}" class="btn btn-warning mx-2">Back</a>
                </div>
        </div>
        
@endsection