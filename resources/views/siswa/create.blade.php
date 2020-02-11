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

                    <form action= "{{route('daftarsiswa.store')}}" method="post">
                        @csrf 
                        <div class="row">
                            <div class="col-md-4">
                                <label for ="">Masukan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" required>
                            </div>
                            <div class="col-md-4">
                                <label for ="">Masukan Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" required>
                            </div>
                            <div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
