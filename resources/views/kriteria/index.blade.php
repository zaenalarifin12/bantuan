@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"> Kriteria</h4>
            </div>
            <div class="card-body">
              <div class="row mx-2 d-flex justify-content-end">
                <a href="{{ url("/kriteria/create") }}" class="btn btn-sm btn-success">tambah</a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th> Nomor </th>
                    <th> Nama </th>
                    <th> type </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    @foreach ($kriteria as $item)
                      <tr>
                        <td> {{ $loop->iteration }}  </td>
                        <td> {{ $item->nama }} </td>
                        <td> 
                          @if ($item->type == "cost")
                            <span class="text-success text-bold"></span> {{ $item->type }}
                          @elseif ($item->type == "benefit")
                            <span class="text-primary text-bold"></span> {{ $item->type }}
                          @endif
                        </td>
                        <td>
                          <a href="{{ url("/kriteria/$item->id/edit") }}" class="btn btn-sm btn-warning">Edit</a>
                          <form action="{{ url("/kriteria/$item->id") }}" method="post" style="display: inline">
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