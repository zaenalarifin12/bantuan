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
                    <th> NIK </th>
                    <th> Nama </th>
                    <th> Jenis Kelamin </th>
                    <th> Alamat </th>
                    @foreach ($kriteria as $item)
                      <th> {{$item->nama}} </th>
                    @endforeach
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    @foreach ($alternatif as $item)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $item->nik }} </td>
                        <td> {{ $item->nama }} </td>
                        <td> {{ $item->jekel }} </td>
                        <td> {{ $item->alamat }} </td>
                        @foreach ($item->subKriteria as $item2)
                        <td> {{$item2->nama}} </td>
                        @endforeach
                        <td>
                          <a href="{{ url("/alternatif/$item->id/edit") }}" class="btn btn-sm btn-warning">Edit</a>
                          
                          <button type="button" id="{{ $item->id }}" class="btn btn-sm btn-danger delete">Hapus</button>

                          <form id="logout-{{ $item->id }}" action="{{ url("/alternatif/$item->id") }}" method="post" style="display: inline">
                            
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


@section('script')

<script type="text/javascript">
  
  $( ".delete" ).click(function(e) {

    e.preventDefault(); 
    var id = $(this).attr("id")

      $.confirm({
          title: 'Confirm!',
          content: 'Anda Yakin akan menghapus data ini!',
          buttons: {
              somethingElse: {
                  text: 'Hapus',
                  btnClass: 'btn-danger',
                  keys: ['enter', 'shift'],
                  action: function(){
                      // $.alert('Something else?');
                      
                      $( `#logout-${id}` ).submit()
                  }
              },
              cancel: function () {
                  $.alert('Canceled!');
              }
          }
      });
  });
  
</script>
@endsection 