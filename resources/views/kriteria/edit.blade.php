@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Kriteria</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/kriteria/$kriteria->id") }}" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Kriteria</label>
                      <input type="text" class="form-control" name="nama" value="{{ $kriteria->nama }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="">Type</label>
                      <select name="type" id="" class="fbrowser-default custom-select">
                          @if ($kriteria == "cost")
                            <option selected value="cost">cost</option>      
                            <option value="benefit">benefit</option>
                          @else
                            <option value="cost">cost</option>      
                            <option selected value="benefit">benefit</option>
                          @endif
                        
                      </select>
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