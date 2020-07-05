@extends('layouts.master')
@section('content')
    <div>
            <a href="{{url('/artikel/create')}}" class="btn btn-primary mx-2">Create Article</a>
    </div>
    <table class="table table-striped">
        <thead>
                <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Aksi</th>
                        
                </tr>
        </thead>
        <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->tag }}</td>
                        <td>{{ $item->create_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                                <div>
                                        <a href="{{url('/artikel/'.$item->id.'/edit')}}"><i class="btn btn-warning fas fa-edit mx-auto"></i></a>
                                        <a href="{{url('/artikel/'.$item->id)}}"><i class="btn btn-success far fa-eye mx-auto"></i></a>
                                        <form action="{{url('/artikel/'.$item->id)}}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"><i class="far fa-trash-alt mx-auto"></i></i></a>
                                        </form>
                                </div>
                        </td>
                        
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush