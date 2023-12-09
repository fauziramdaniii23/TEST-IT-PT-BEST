@extends('main')

@section('container')
<div>
    <div class="col-md-5">
        <form method="POST" action="/datapegawai/{{ $data->id }}" enctype="multipart/form-data" id="form">
            @method('put')
            @csrf
            <div class="mb-3 d-flex mx-4">
              <label for="pegawai_nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('pegawai_nama') is-invalid @enderror" id="pegawai_nama" name="pegawai_nama" value="{{ old('pegawai_nama', $data->pegawai_nama) }}">
              @error('pegawai_nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
            </div>

            <div class="mb-3 mx-4">
              <label for="tempat_lahir" class="form-label">Tempat Tanggal Lahir</label>
              <div class="d-flex">
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $data->tempat_lahir) }}">
              @error('tempat_lahir')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $data->tgl_lahir) }}">
              @error('tgl_lahir')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
              
            </div>

            <div class="mb-3 d-flex mx-4">
                <label for="pegawai_alamat" class="form-label">Alamat</label>
                <textarea name="pegawai_alamat" id="pegawai_alamat" class="form-control @error('pegawai_alamat') is-invalid @enderror">{{ old('pegawai_alamat', $data->pegawai_alamat) }}</textarea>
                @error('pegawai_alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
              </div>

              <div class="mb-3 d-flex mx-4">
                <label for="no_telepon" class="form-label">No Telp HP</label>
                <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $data->no_telepon) }}">
                @error('no_telepon')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
              </div>
              
              <div class="mb-3 d-flex mx-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" id="inlineCheckbox1" value="Laki-laki">
                    <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" id="inlineCheckbox2" value="Perempuan">
                    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                  </div>
            </div>
              
            <div class="mb-3 d-flex mx-4">
                <select class="form-select" name="agama" aria-label="Default select example">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
            </div>

            <div class="mb-3 d-flex mx-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobi[]" type="checkbox" id="inlineCheckbox1" value="Baca Buku">
                    <label class="form-check-label" for="inlineCheckbox1">Baca Buku</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobi[]" type="checkbox" id="inlineCheckbox2" value="Olahraga">
                    <label class="form-check-label" for="inlineCheckbox2">Olahraga</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobi[]" type="checkbox" id="inlineCheckbox2" value="Main Game">
                    <label class="form-check-label" for="inlineCheckbox2">Main Game</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobi[]" type="checkbox" id="inlineCheckbox2" value="Hiking">
                    <label class="form-check-label" for="inlineCheckbox2">Hiking</label>
                  </div>
            </div>
            
            
    
            <button type="submit" class="btn btn-primary">edit</button>
            <a href="/" class="btn btn-warning">Kembali</a>
            
          </form>
        
</div>
</div>
    
@endsection