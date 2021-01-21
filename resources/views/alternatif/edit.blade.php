@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Alternatif</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/alternatif/$alternatif->id") }}" method="POST">
                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >NIK</label>
                      <input type="text" required class="form-control" name="nik" value="{{ $alternatif->nik }}">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Nama Penduduk</label>
                      <input type="text" required class="form-control" name="nama" value="{{ $alternatif->nama }}">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Jenis Kelamin</label>
                      <select name="jekel" id="" required class="fbrowser-default custom-select">
                        @if ($alternatif->jekel == "laki-laki")
                          <option value="laki-laki" selected>laki-laki</option>
                          <option value="perempuan">perempuan</option>
                        @elseif ($alternatif->jekel == "perempuan")
                          <option value="laki-laki">laki-laki</option>
                          <option value="perempuan" selected>perempuan</option>
                        @endif
                        
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Alamat</label>
                      <textarea name="alamat" class="form-control" required id="" cols="30" rows="10">
                        {{ $alternatif->nik }}
                      </textarea>
                      
                    </div>
                  </div>

                  @foreach ($kriteria as $item)
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="">{{$item->nama}}</label>
                      <select name="nilai[]" id="" class="fbrowser-default custom-select">
                        @foreach ($item->subKriteria as $item2)
                          <option
                            @foreach ($alternatif->subKriteria as $item_al)
                                @if ($item2->id == $item_al->id)
                                    selected
                                @endif
                            @endforeach 
                          value="{{ $item2->id }}">{{ $item2->nama }}</option>
                        @endforeach
                      </select>
                      <input type="hidden" name="id[]" value="{{ $item->id }}">
                    </div>
                  </div>    
                  @endforeach
                  
                </div>
                @csrf
                @method("PUT")
                <button type="submit" class="btn btn-primary pull-right">Edit</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection