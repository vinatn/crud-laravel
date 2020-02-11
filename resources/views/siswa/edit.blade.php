@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action= "{{route('daftarsiswa.update',$siswa->id)}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group>
                                <label for ="">Nama Siswa</label>
                                <input type="text" value="{{$siswa->nama}}" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for ="">Masukan Kelas</label>
                                <input type="text" value="{{$siswa->kelas}}" name="kelas" class="form-control">
                            </div>
                            <div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
