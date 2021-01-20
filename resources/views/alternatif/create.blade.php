@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tambah Alternatif</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/alternatif") }}" method="POST">
                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >NIK</label>
                      <input type="text" required class="form-control" name="nik">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Nama Penduduk</label>
                      <input type="text" required class="form-control" name="nama">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Jenis Kelamin</label>
                      <select name="jekel" id="" required class="fbrowser-default custom-select">
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Alamat</label>
                      <textarea name="alamat" class="form-control" required id="" cols="30" rows="10"></textarea>
                    </div>
                  </div>


                  {{-- kriteria --}}
                  @foreach ($kriteria as $item)
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="">{{$item->nama}}</label>
                      <select name="nilai[]" id="" class="fbrowser-default custom-select">
                          @foreach ($item->subKriteria as $item2)
                              <option value="{{ $item2->id }}">{{ $item2->nama }}</option>
                          @endforeach
                      </select>
                      <input type="hidden" name="id[]" value="{{ $item->id }}">
                    </div>
                  </div>    
                  @endforeach
                  
                </div>
                @csrf
                <button type="submit" class="btn btn-primary pull-right">Buat</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection