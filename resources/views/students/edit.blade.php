@extends ('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Ubah Data Mahasiswa</h1>
        </div>
    </div>

<form method="post" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" value="{{$student->nama}}" name="nama">
          @error('nama')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" value="{{$student->nis}}" placeholder="Masukan nis" name="nis">
          @error('nis')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$student->email}}" placeholder="Masukan email" name="email">
          @error('email')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" value="{{$student->jurusan}}" placeholder="Masukan jurusan" name="jurusan">
          @error('jurusan')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
    

</div>
@endsection