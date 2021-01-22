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

              @php
                  // ambil data alternatif
                $alternatif = \App\Alternatif::get()->toArray();
                $kriteria = \App\Kriteria::get()->toArray();
                $nilai = \Illuminate\Support\Facades\DB::table("alternatif_kriteria")
                    ->orderBy("alternatif_id", "ASC")
                    ->orderBy("kriteria_id", "ASC")
                    ->get()->toArray();

                // dd($nilai);

                $nilai_asli = [];
                // untuk menampung alternatif nilai asli menjadi array
                for ($i=0; $i < count($alternatif); $i++) { 
                    
                    $id = $alternatif[$i]["id"];

                    $hasil_per = \Illuminate\Support\Facades\DB::table("alternatif_kriteria")
                    ->orderBy("alternatif_id", "ASC")
                    ->orderBy("kriteria_id", "ASC")
                    ->where("alternatif_id", $id)
                    ->get()->toArray();

                    $j = 0;
                    foreach($hasil_per as $item){
                        $nilai_asli[$id][$item->kriteria_id] = $item->sub_kriteria_id;
                    }
                }

                // ==================== buat array kriteria
                $nilai_kriteria = [];

                for ($i=0; $i < count($kriteria); $i++) { 

                    $id = $kriteria[$i]["id"];

                    $hasil_per = \Illuminate\Support\Facades\DB::table("alternatif_kriteria")
                    ->orderBy("alternatif_id", "ASC")
                    ->orderBy("kriteria_id", "ASC")
                    ->where("kriteria_id", $id)
                    ->get()->toArray();

                    $j = 0;
                    foreach($hasil_per as $item){
                        $nilai_kriteria[$item->kriteria_id][$j++] = $item->sub_kriteria_id;
                    }
                }


                $nilai_normalisasi = [];
                
                foreach($nilai_asli as $key => $value){
                    
                    foreach($value as $item1 => $value1){
                        
                        // jika kriteria == cost 
                        $kriteria = \App\Kriteria::findOrFail($item1);
                        
                        if($kriteria->type == "cost"){
                            $temp_hasil = min($nilai_kriteria[$item1]) / $value1;
                        }else{
                            $temp_hasil = $value1 / max($nilai_kriteria[$item1]);
                        }                

                        $nilai_normalisasi[$key][$item1] = $temp_hasil;
                    }
                  
                }

                
                // kalikan normalisasi dengan bobot
                $hasil_alternatif = [];

                $hasil_akhir = [];

                foreach($nilai_normalisasi as $key => $value){
                    
                    $hasil_per_al = [];

                    foreach($value as $item1 => $value1){
                        
                        $bobot = \App\Bobot::where("kriteria_id", $item1)->first();
                        
                        $temp_hasil = $value1 * $bobot->nilai;
                
                        array_push($hasil_per_al, $temp_hasil);
                    }

                    $hasil_alternatif[$key] =  array_sum($hasil_per_al);
                }

                arsort($hasil_alternatif);
              @endphp 


              {{-- kriteria --}}
              <p class="font-weight-bold">Kriteria</p>
              <table class="table table-hover">
                @foreach ($nilai_kriteria as $key => $value)
                  @php
                    $kriteria = \App\Kriteria::findOrFail($key);  
                  @endphp
                  <th style="text-align: center;">
                    {{$kriteria->nama}}
                  </th>
                @endforeach

                @foreach ($nilai_kriteria as $key => $value)
                  <tr style="text-align: center;">
                  @foreach ($value as $key2 => $value2)
                      <td> {{ $value2 }} </td>
                  @endforeach
                  </tr>
                @endforeach
              </table>

              <p class="font-weight-bold"> Normalisasi Matrix </p>
             
                @php
                    $nilai_normalisasi = [];
                
                    $i = 1;
                    foreach($nilai_asli as $key => $value){
                        echo "<p>Kriteria C$i </p>";
                        
                        $j = 1;
                        foreach($value as $item1 => $value1){
                          
                            // jika kriteria == cost 
                            $kriteria = \App\Kriteria::findOrFail($item1);
                            
                            if($kriteria->type == "cost"){
                                $temp_hasil = min($nilai_kriteria[$item1]) / $value1;
                                echo "<p> r <sub>$i$j</sub>  : " . "min{" . implode(",", $nilai_kriteria[$item1]) . "}" . " / $value1" . " = " . round($temp_hasil, 4) . "</p>";
                            }else{
                                $temp_hasil = $value1 / max($nilai_kriteria[$item1]);
                                echo "<p> r <sub>$i$j</sub> : " . "$value1 / " . "max{" . implode(",", $nilai_kriteria[$item1]) . "}" . " = " . round($temp_hasil, 4) . "</p>";
                            }                

                            $nilai_normalisasi[$key][$item1] = $temp_hasil;

                            $j++;
                        }
                        echo "<br>";
                          $i++;
                    }
                @endphp
            

              <p class="font-weight-bold"> <b>Nilai Normalisasi</b> </p>
              <table class="table table-hover">
                @foreach ($nilai_normalisasi as $key => $value)
                  <tr style="text-align: center;">
                  @foreach ($value as $key2 => $value2)
                      <td> {{ round($value2, 4)  }} </td>
                  @endforeach
                  </tr>
                @endforeach
              </table>

              <p class="font-weight-bold">Hasil </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th> Nomor </th>
                    <th> NIK </th>
                    <th> Nama </th>
                    <th> Jenis Kelamin </th>
                    <th> Alamat </th>
                    <th> hasil </th>
                  </thead>
                  <tbody>
                    @foreach ($hasil_alternatif as $key => $item)
                    @php
                        $al = \App\Alternatif::where(['id' => $key])->first();
                        
                    @endphp
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $al->nik }}</td>
                        <td>{{ $al->nama }}</td>
                        <td>{{ $al->jekel }}</td>
                        <td>{{ $al->alamat }}</td>
                        <td>{{ round($item, 4) }} </td>
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