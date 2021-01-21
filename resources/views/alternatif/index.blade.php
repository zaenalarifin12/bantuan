@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Alternatif</h4>  
            </div>
            <div class="card-body">
              <div class="row mx-2 d-flex justify-content-end">
                <a href="{{ url("/alternatif/create") }}" class="btn btn-sm btn-success">tambah</a>
              </div>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th> Nomor </th>
                    <th> Nama </th>
                    @foreach ($kriteria as $item)
                      <th> {{$item->nama}} </th>
                    @endforeach
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    @foreach ($alternatif as $item)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $item->nama }} </td>
                        @foreach ($item->subKriteria as $item2)
                        <td> {{$item2->nama}} </td>
                        @endforeach
                        <td>
                          <a href="{{ url("/alternatif/$item->id/edit") }}" class="btn btn-sm btn-warning">Edit</a>
                          
                          <form action="{{ url("/alternatif/$item->id") }}" method="post" style="display: inline">
                            <button  onclick="return confirm('Apakah Kamu yakin untuk menghapus?')" type="submit" class="btn btn-sm btn-danger deletebutton ">Hapus</button>
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