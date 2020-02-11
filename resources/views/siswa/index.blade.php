@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Daftar Siswa
                <a href = "{{ route ('daftarsiswa.create') }}" class = " btn btn-primary float-right">
                    Tambah Siswa
                    </a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <td>Nama Siswa</td>
                            <td>Kelas</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>
                                <form action="{{route('daftarsiswa.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                    <a href="{{route('daftarsiswa.show',$item->id)}}" class ="btn btn-info">Lihat</a>
                                    <a href="{{route('daftarsiswa.edit',$item->id)}}" class ="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                    </td>
                            </tr>

                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection