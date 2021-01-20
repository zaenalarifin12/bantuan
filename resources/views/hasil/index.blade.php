@extends('app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Hasil Perhitungan </h4>  
            </div>
            <div class="card-body">
              <div class="row mx-2 d-flex justify-content-end">
              </div>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th> Nomor </th>
                    <th> Nama </th>
                    <th> hasil </th>
                  </thead>
                  <tbody>
                    @foreach ($hasil_alternatif as $key => $item)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>penduduk 1</td>
                        <td>0.75545454</td>
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