@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tambah Kriteria</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/kriteria") }}" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating" >Nama Kriteria</label>
                      <input type="text" required class="form-control" name="nama">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="">Type</label>
                      <select name="type" id="" class="fbrowser-default custom-select">
                          <option value="cost">cost</option>
                          <option value="benefit">benefit</option>
                      </select>
                    </div>
                  </div>
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