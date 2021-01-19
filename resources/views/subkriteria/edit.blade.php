@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tambah Sub Kriteria</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/subkriteria/$subKriteria->id") }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating ">Nama Kriteria</label>
                          <select name="kriteria_id" id="" class="fbrowser-default custom-select">
                              @foreach ($kriteria as $item)

                                <option
                                @if ($item->id == $subKriteria->kriteria->id)
                                    selected                                    
                                @endif
                                value="{{$item->id}}">{{$item->nama}}</option>    
                              @endforeach
                          </select>
                        </div>
                    </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Nama Sub Kriteria</label>
                      <input type="text" class="form-control" name="nama" value="{{ $subKriteria->nama }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Nilai</label>
                      <input type="number" class="form-control" name="nilai" value="{{ $subKriteria->nilai}}">
                    </div>
                  </div>
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