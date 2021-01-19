@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Sub Kriteria</h4>  
            </div>
            <div class="card-body">
              <div class="row mx-2 d-flex justify-content-end">
                <a href="{{ url("/subkriteria/create") }}" class="btn btn-sm btn-success">tambah</a>
              </div>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th> Nomor </th>
                    <th> Kriteria </th>
                    <th> Nama </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    @foreach ($subKriteria as $item)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $item->kriteria->nama }} </td>
                        <td> {{ $item->nama }} </td>
                        <td> {{ $item->nilai }} </td>
                        <td>
                          <a href="{{ url("/subkriteria/$item->id/edit") }}" class="btn btn-sm btn-warning">Edit</a>
                          <form action="{{ url("/subkriteria/$item->id") }}" method="post" style="display: inline">
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            @csrf
                            @method("DELETE")
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection