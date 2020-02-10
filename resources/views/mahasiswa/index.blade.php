@extends ('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nis}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td><a href="" class="badge badge-warning mr-3">Ubah</a><a href="" class="badge badge-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              
        </div>
    </div>
</div>
@endsection