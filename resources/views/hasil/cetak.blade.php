<!DOCTYPE html>
<html lang="en">
<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
    
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

              <div class="d-flex justify-content-between">
                <p class="font-weight-bold">Penduduk </p>
              </div>
              
              <div id="customers">
                <table class="">
                  <tr class="">
                    <th> Nomor </th>
                    <th> NIK </th>
                    <th> Nama </th>
                    <th> Jenis Kelamin </th>
                    <th> Alamat </th>
                    <th> hasil </th>
                  </tr>
                  
                    @foreach ($hasil_alternatif as $key => $item)
                    <tr>
                    @php
                        $al = \App\Alternatif::where(['id' => $key])->first();
                    @endphp
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $al->nik }}</td>
                        <td>{{ $al->nama }}</td>
                        <td>{{ $al->jekel }}</td>
                        <td>{{ $al->alamat }}</td>
                        <td>{{ round($item, 4) }} </td>
                    </tr>
                    @endforeach
                 
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>