@extends('layouts.master')

@section('content')
        <form action="{{ url('/artikel/'.$items->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mx-2">
                <label for="judul">Judul</label>
                <input name="judul" type="text" class="form-control" id="judul">
                </div>
                <div class="form-group mx-2">
                
                        <label for="isi">Isi</label>
                        <textarea name="isi" id="isi" cols="20" rows="8" class="form-control"></textarea>
                </div>
                <div class="form-group mx-2">
                
                        <label for="judul">Tags</label>
                        <input type="text" name="tag" class="form-control" id="tag">
                </div>
                <input type="hidden" name="updated_at" value="{{ date('Y-m-d') }}">
                <button type="submit" class="btn btn-primary mx-2">Submit</button>
                <a href="{{url('/artikel')}}" class="btn btn-warning mx-2">Back</a>
        </form>
    
@endsection