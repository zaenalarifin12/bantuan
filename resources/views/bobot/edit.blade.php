@extends('app')

@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Bobot</h4>
            </div>
            <div class="card-body">
              <form action="{{ url("/bobot/$bobot->id") }}" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating" >Kriteria</label>
                            <select name="kriteria_id" id="" class="fbrowser-default custom-select">
                                <option value="{{ $bobot->kriteria_id }}">{{ $bobot->kriteria->nama }}</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating" >Bobot</label>
                            <input type="text" required class="form-control" name="nilai" value="{{ $bobot->nilai}}">
                        </div>
                    </div>

                </div>
                @csrf
                @method("PUT")
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