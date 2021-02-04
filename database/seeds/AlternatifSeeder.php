<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder data penduduk
        DB::table("alternatif")->insert([
    
        
            ["nik" => "3319040606480002",	"nama" => "SAROZI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3317070810820005",	"nama" => "NURKHOLIS 	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319045209580005",	"nama" => "SOFIYAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319032504840001",	"nama" => "MUHAMMAD SOLIKIN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319040403690003",	"nama" => "ALI MUCHTAR	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319047007840004",	"nama" => "A'IZZATIN NI'MAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319047112560066",	"nama" => "MUNTIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319040903740001",	"nama" => "SUTRISNO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319042511580002",	"nama" => "DARNO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319044702530000",	"nama" => "SUNARTI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319047112350041",	"nama" => "KASAMAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319044704610007",	"nama" => "SITI NIKMAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/01 Undaan"],
            ["nik" => "3319045606530001",	"nama" => "SURIPAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3315131203790006",	"nama" => "MUSTAJIB	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3319041503580001",	"nama" => "SUJONO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3319040201940003",	"nama" => "NOR 'AUFA	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3319040409840001",	"nama" => "AHMAD CHOLID	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3319040301910002",	"nama" => "ACHMAD RIFAI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/01 Undaan"],
            ["nik" => "3319044110720001",	"nama" => "PANIRAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319046212690002",	"nama" => "JASINAH 	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319044911590001",	"nama" => "SUKIRAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319044810380003",	"nama" => "PAINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319044812680003",	"nama" => "RUMINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319045212610003",	"nama" => "NGASILAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319044606500005",	"nama" => "RUPIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319045012620004",	"nama" => "SARINI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319046010640003",	"nama" => "RUTINAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319040112560003",	"nama" => "SUKARI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319046007780001",	"nama" => "AZIM CHOIRIYAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319042012500002",	"nama" => "ROCHMAD	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319045212400003",	"nama" => "BARIJAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/01 Undaan"],
            ["nik" => "3319040712560001",	"nama" => "SARJI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319041012500002",	"nama" => "TASMILAN	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319045203640001",	"nama" => "SITI QONAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319044404490001",	"nama" => "SUTIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319040712600002",	"nama" => "KUSNIN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319044606600004",	"nama" => "SUBAIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319041403600001",	"nama" => "DANU	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319041007700005",	"nama" => "ZAMIL ARIFIN	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319046509700001",	"nama" => "KARTINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319040412450001",	"nama" => "SUHUD	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319040107530067",	"nama" => "RIF'AN	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/01 Undaan"],
            ["nik" => "3319044606480002",	"nama" => "PAINI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319045304680002",	"nama" => "MARYATI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319044712610003",	"nama" => "KUMIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319040602730002",	"nama" => "DJUNEDI CHAKI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319041306700002",	"nama" => "RISTO	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319043112600121",	"nama" => "WARSAM	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319040612550001",	"nama" => "BAMBANG SUDIBYO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/01 Undaan"],
            ["nik" => "3319044606550004",	"nama" => "SURIPAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319042212530001",	"nama" => "KARFAN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319044612500001",	"nama" => "JEMIRAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319040501730003",	"nama" => "TEGUH HADI SAPUTRA	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319046103830001",	"nama" => "SUMIATI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319045212550008",	"nama" => "MUSLICHAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319044504510001",	"nama" => "MARFUAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319043112720053",	"nama" => "MUKHLISIN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319046205690003",	"nama" => "SUMISIH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319044202610001",	"nama" => "SUNARTI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319041008650001",	"nama" => "SYA'RONI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319044112610002",	"nama" => "FATONAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/02 Undaan"],
            ["nik" => "3319041006680001",	"nama" => "SUKIRMAN	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319041210390002",	"nama" => "KUSDI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319041106730004",	"nama" => "ARIF	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319041912560001",	"nama" => "NOOR BASYAR	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319044712560001",	"nama" => "SULASTRI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319041609530001",	"nama" => "SUKIRNO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319041310710001",	"nama" => "SUSANTO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/02 Undaan"],
            ["nik" => "3319044107760104",	"nama" => "JUARIYAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319045006720002",	"nama" => "LULUK AGUSTINA	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319041712550002",	"nama" => "SADIKUN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319044704690002",	"nama" => "SUNARTI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319045312590002",	"nama" => "KASRIPAH	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319044503430001",	"nama" => "WASIRAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319040101970002",	"nama" => "JENIV ANDIKA FRADANA	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 03/02 Undaan"],
            ["nik" => "3319045206600002",	"nama" => "SUBAEAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "1119046304650001",	"nama" => "SURIYAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319046005740003",	"nama" => "SUNTARI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319041012600008",	"nama" => "SAPARI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319043112560083",	"nama" => "SOLHADI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319044408650006",	"nama" => "WARSINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319041103540001",	"nama" => "SUDARSONO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319040205630003",	"nama" => "AMBARI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319045602400002",	"nama" => "SUMINAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319045705720002",	"nama" => "SUMIAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319045407560001",	"nama" => "ARTINAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319044603460001",	"nama" => "SUHARTINAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 04/02 Undaan"],
            ["nik" => "3319040608530001",	"nama" => "SUKIRNO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319044506650003",	"nama" => "SENIRAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319044202510001",	"nama" => "PAIRI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319041902770001",	"nama" => "RUMADI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319045012580003",	"nama" => "ISTICHAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319046505350001",	"nama" => "KAMINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319045810610002",	"nama" => "SUKARTI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319045010910003",	"nama" => "MUNAWAROH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319044202540001",	"nama" => "SUJIANAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319042605800002",	"nama" => "JUNIANTO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319070704770004",	"nama" => "HARIYANTO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319045712800002",	"nama" => "UMMI LATIFAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 05/02 Undaan"],
            ["nik" => "3319045606870005",	"nama" => "CHOMSATUN	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319047112620194",	"nama" => "SUMARSIH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319041012570001",	"nama" => "SUHADI	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319045302510001",	"nama" => "SUMRUKIYAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319034705820002",	"nama" => "NOR ALIM	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319044102380001",	"nama" => "KARSINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319046012590001",	"nama" => "KASNI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319044606600007",	"nama" => "SAMINAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319041204380001",	"nama" => "SUPANGAT	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319044207590001",	"nama" => "SUPARMI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319045208330001",	"nama" => "WARSIH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319040103940001",	"nama" => "CHAIRUL IMAM	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 01/03 Undaan"],
            ["nik" => "3319045006620001",	"nama" => "SUNARTI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319031806730001",	"nama" => "ALI PUJIANTO	" , "jekel" => "L",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319047112560053",	"nama" => "JEMINAH	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319044707660003",	"nama" => "SRIYATI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319045107640001",	"nama" => "SUNGKARNI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319047112630284",	"nama" => "NGATINI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319045604660007",	"nama" => "SUPARMI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319044304630003",	"nama" => "SUMARNI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"],
            ["nik" => "3319044807680002",	"nama" => "SUYATI	" , "jekel" => "P",	"alamat" =>"Ngemplak, RT 02/03 Undaan"]
           
        ]);

        $nilai = [

"3319040606480002" => [5,	7,	5,	6,	7,	6,	5,	6,	2,	6,	4,	5,	6],
"3317070810820005" => [3,	4,	5,	6,	6,	6,	5,	6,	5,	6,	4,	5,	6],
"3319045209580005" => [3,	3,	4,	2,	6,	5,	5,	6,	5,	6,	4,	5,	6],
"3319032504840001" => [4,	5,	5,	6,	6,	5,	4,	4,	5,	6,	4,	5,	6],
"3319040403690003" => [4,	7,	5,	6,	5,	4,	4,	4,	5,	2,	3,	5,	4],
"3319047007840004" => [2,	2,	2,	2,	4,	4,	3,	4,	5,	2,	3,	5,	4],
"3319047112560066" => [5,	3,	3,	6,	4,	3,	2,	2,	2,	6,	3,	5,	4],
"3319040903740001" => [3,	6,	5,	2,	3,	3,	5,	2,	2,	2,	2,	5,	4],
"3319042511580002" => [4,	3,	4,	6,	6,	2,	5,	2,	3,	2,	2,	5,	2],
"3319044702530000" => [5,	7,	1,	2,	5,	2,	5,	1,	3,	6,	2,	4,	2],
"3319047112350041" => [2,	5,	5,	2,	5,	5,	4,	1,	2,	6,	3,	4,	1],
"3319044704610007" => [5,	1,	3,	2,	6,	5,	4,	1,	2,	2,	3,	4,	1],
"3319045606530001" => [4,	2,	1,	6,	4,	6,	4,	1,	1,	2,	3,	4,	6],
"3315131203790006" => [4,	4,	5,	2,	3,	6,	5,	4,	1,	6,	1,	2,	6],
"3319041503580001" => [2,	7,	3,	6,	2,	4,	5,	4,	5,	6,	1,	2,	2],
"3319040201940003" => [4,	4,	1,	6,	5,	4,	5,	4,	5,	6,	1,	2,	2],
"3319040409840001" => [3,	3,	5,	2,	6,	3,	5,	6,	4,	2,	4,	2,	6],
"3319040301910002" => [2,	2,	3,	6,	4,	3,	4,	6,	4,	2,	4,	5,	2],
"3319044110720001" => [4,	6,	2,	2,	3,	2,	4,	6,	3,	6,	4,	5,	6],
"3319046212690002" => [4,	7,	5,	6,	2,	2,	4,	2,	5,	2,	3,	5,	2],
"3319044911590001" => [4,	3,	1,	2,	6,	1,	3,	2,	3,	6,	3,	5,	6],
"3319044810380003" => [3,	2,	4,	6,	5,	1,	3,	2,	2,	6,	2,	5,	6],
"3319044812680003" => [3,	1,	5,	2,	4,	5,	3,	1,	4,	2,	2,	5,	6],
"3319045212610003" => [5,	1,	3,	6,	3,	5,	2,	1,	5,	6,	2,	5,	2],
"3319044606500005" => [5,	4,	2,	2,	2,	4,	2,	1,	4,	2,	1,	5,	2],
"3319045012620004" => [5,	3,	1,	2,	6,	4,	2,	6,	5,	6,	1,	5,	2],
"3319046010640003" => [5,	2,	5,	6,	5,	3,	4,	6,	3,	6,	1,	3,	6],
"3319040112560003" => [4,	7,	3,	6,	3,	2,	4,	6,	5,	6,	4,	3,	6],
"3319046007780001" => [4,	5,	2,	2,	2,	6,	4,	6,	3,	6,	4,	3,	6],
"3319042012500002" => [2,	3,	1,	2,	6,	6,	5,	4,	3,	2,	3,	3,	2],
"3319045212400003" => [3,	2,	5,	6,	5,	5,	5,	4,	4,	2,	4,	3,	2],
"3319040712560001" => [3,	1,	3,	2,	2,	4,	5,	4,	4,	6,	4,	3,	2],
"3319041012500002" => [4,	6,	1,	6,	3,	4,	4,	4,	5,	6,	4,	3,	2],
"3319045203640001" => [4,	5,	3,	2,	6,	1,	3,	2,	2,	6,	2,	4,	6],
"3319044404490001" => [2,	4,	5,	6,	5,	4,	3,	2,	4,	2,	2,	4,	6],
"3319040712600002" => [2,	3,	5,	2,	4,	5,	3,	2,	5,	6,	2,	4,	6],
"3319044606600004" => [4,	7,	5,	6,	5,	6,	2,	2,	4,	6,	1,	4,	6],
"3319041403600001" => [3,	6,	2,	2,	6,	3,	2,	6,	2,	2,	1,	4,	6],
"3319041007700005" => [5,	5,	1,	2,	5,	6,	2,	6,	3,	6,	1,	4,	2],
"3319046509700001" => [4,	3,	5,	6,	6,	6,	1,	6,	3,	2,	4,	4,	2],
"3319040412450001" => [4,	2,	3,	2,	4,	5,	1,	6,	5,	6,	4,	5,	2],
"3319040107530067" => [3,	2,	5,	2,	4,	5,	1,	1,	5,	2,	4,	5,	2],
"3319044606480002" => [2,	1,	4,	6,	4,	4,	4,	1,	4,	6,	3,	5,	6],
"3319045304680002" => [3,	7,	3,	6,	6,	4,	4,	1,	4,	6,	3,	5,	6],
"3319044712610003" => [2,	5,	2,	6,	5,	4,	4,	1,	3,	6,	3,	5,	6],
"3319040602730002" => [3,	3,	1,	6,	5,	6,	5,	2,	3,	6,	2,	4,	2],
"3319041306700002" => [3,	4,	4,	2,	6,	5,	5,	2,	1,	2,	2,	4,	6],
"3319043112600121" => [4,	2,	5,	2,	6,	5,	3,	2,	4,	6,	2,	4,	2],
"3319040612550001" => [5,	1,	3,	6,	5,	4,	3,	4,	2,	6,	1,	4,	4],
"3319044606550004" => [4,	7,	2,	6,	4,	3,	2,	4,	4,	2,	1,	4,	4],
"3319042212530001" => [2,	4,	1,	6,	3,	2,	2,	4,	2,	6,	1,	4,	4],
"3319044612500001" => [2,	2,	5,	6,	2,	1,	2,	6,	4,	2,	4,	4,	2],
"3319040501730003" => [4,	6,	4,	2,	6,	1,	3,	6,	3,	6,	4,	4,	2],
"3319046103830001" => [3,	2,	2,	6,	5,	3,	5,	6,	2,	6,	4,	4,	2],
"3319045212550008" => [2,	5,	1,	2,	4,	3,	3,	6,	1,	6,	3,	3,	1],
"3319044504510001" => [5,	3,	2,	2,	6,	4,	4,	2,	3,	2,	3,	3,	1],
"3319043112720053" => [2,	7,	5,	2,	6,	5,	5,	2,	4,	6,	3,	3,	6],
"3319046205690003" => [4,	1,	3,	6,	5,	6,	4,	2,	5,	6,	2,	3,	6],
"3319044202610001" => [4,	2,	1,	2,	4,	5,	2,	2,	5,	2,	2,	3,	6],
"3319041008650001" => [5,	5,	2,	2,	3,	4,	3,	1,	5,	2,	2,	3,	6],
"3319044112610002" => [5,	6,	5,	6,	3,	3,	4,	1,	5,	6,	1,	3,	6],
"3319041006680001" => [4,	7,	2,	6,	2,	3,	3,	1,	4,	6,	1,	2,	4],
"3319041210390002" => [4,	3,	1,	2,	3,	2,	4,	1,	4,	2,	1,	2,	4],
"3319041106730004" => [5,	2,	5,	6,	3,	1,	5,	6,	4,	6,	4,	2,	4],
"3319041912560001" => [3,	1,	5,	2,	4,	6,	5,	6,	3,	6,	4,	2,	6],
"3319044712560001" => [2,	2,	4,	6,	5,	6,	4,	6,	2,	2,	2,	2,	2],
"3319041609530001" => [3,	3,	5,	2,	6,	5,	4,	6,	1,	6,	4,	2,	2],
"3319041310710001" => [4,	5,	3,	2,	5,	4,	4,	6,	4,	2,	3,	2,	4],
"3319044107760104" => [2,	6,	2,	6,	2,	3,	5,	2,	5,	6,	3,	2,	1],
"3319045006720002" => [3,	4,	5,	6,	3,	2,	5,	2,	3,	6,	3,	2,	6],
"3319041712550002" => [4,	3,	4,	2,	4,	1,	5,	2,	2,	2,	3,	2,	6],
"3319044704690002" => [2,	2,	3,	2,	4,	2,	4,	2,	1,	2,	3,	2,	2],
"3319045312590002" => [2,	7,	5,	6,	5,	3,	3,	4,	4,	6,	2,	4,	2],
"3319044503430001" => [2,	1,	3,	6,	5,	3,	2,	6,	5,	6,	2,	4,	6],
"3319040101970002" => [4,	2,	2,	6,	4,	4,	2,	4,	5,	2,	2,	4,	6],
"3319045206600002" => [4,	3,	5,	2,	3,	5,	3,	1,	4,	2,	1,	4,	4],
"1119046304650001" => [3,	4,	5,	2,	3,	6,	3,	2,	3,	2,	1,	4,	2],
"3319046005740003" => [5,	7,	5,	6,	2,	5,	4,	2,	3,	6,	1,	4,	6],
"3319041012600008" => [2,	2,	4,	6,	4,	4,	4,	6,	2,	6,	4,	4,	1],
"3319043112560083" => [2,	1,	3,	2,	4,	3,	5,	4,	2,	6,	4,	4,	1],
"3319044408650006" => [4,	4,	2,	2,	5,	2,	5,	2,	4,	2,	4,	4,	2],
"3319041103540001" => [5,	3,	5,	6,	6,	3,	5,	2,	5,	2,	3,	4,	2],
"3319040205630003" => [3,	2,	5,	6,	4,	4,	5,	1,	4,	2,	3,	4,	2],
"3319045602400002" => [5,	1,	5,	6,	3,	5,	5,	6,	2,	6,	3,	5,	4],
"3319045705720002" => [5,	6,	4,	2,	3,	6,	5,	4,	5,	6,	3,	5,	4],
"3319045407560001" => [2,	5,	3,	6,	4,	4,	3,	4,	4,	6,	2,	5,	6],
"3319044603460001" => [4,	4,	2,	2,	5,	3,	3,	2,	3,	2,	2,	5,	4],
"3319040608530001" => [3,	3,	5,	6,	5,	4,	3,	6,	2,	2,	2,	4,	6],
"3319044506650003" => [5,	2,	3,	6,	6,	5,	3,	4,	1,	2,	2,	4,	2],
"3319044202510001" => [4,	6,	2,	2,	6,	6,	2,	1,	2,	6,	1,	4,	1],
"3319041902770001" => [4,	2,	1,	2,	5,	5,	5,	2,	5,	2,	1,	4,	6],
"3319045012580003" => [2,	1,	5,	6,	6,	3,	2,	6,	1,	6,	1,	4,	2],
"3319046505350001" => [4,	7,	4,	6,	6,	4,	3,	4,	3,	2,	1,	4,	4],
"3319045810610002" => [5,	4,	2,	6,	4,	4,	4,	6,	2,	2,	2,	3,	4],
"3319045010910003" => [3,	2,	3,	6,	3,	3,	4,	6,	5,	2,	2,	3,	4],
"3319044202540001" => [4,	1,	4,	2,	3,	2,	3,	2,	3,	6,	2,	3,	1],
"3319042605800002" => [4,	6,	1,	6,	4,	2,	1,	4,	4,	6,	4,	3,	4],
"3319070704770004" => [5,	5,	5,	6,	4,	5,	2,	6,	4,	6,	4,	4,	4],
"3319045712800002" => [3,	3,	3,	2,	5,	4,	3,	4,	3,	2,	4,	4,	6],
"3319045606870005" => [3,	7,	2,	2,	5,	3,	4,	6,	2,	2,	3,	4,	4],
"3319047112620194" => [4,	2,	1,	2,	6,	2,	5,	2,	3,	2,	3,	3,	6],
"3319041012570001" => [4,	1,	5,	6,	6,	2,	5,	1,	4,	6,	3,	3,	2],
"3319045302510001" => [2,	5,	4,	6,	5,	5,	5,	6,	3,	2,	4,	3,	2],
"3319034705820002" => [3,	7,	2,	6,	4,	4,	5,	6,	5,	6,	4,	3,	2],
"3319044102380001" => [2,	2,	5,	2,	6,	3,	3,	2,	4,	6,	4,	3,	6],
"3319046012590001" => [3,	6,	3,	2,	5,	2,	3,	6,	2,	6,	4,	3,	2],
"3319044606600007" => [4,	1,	2,	6,	4,	2,	3,	2,	4,	2,	4,	2,	4],
"3319041204380001" => [3,	2,	1,	6,	5,	1,	2,	6,	3,	2,	4,	2,	4],
"3319044207590001" => [2,	5,	5,	2,	6,	2,	2,	2,	2,	2,	4,	2,	1],
"3319045208330001" => [5,	7,	4,	2,	5,	3,	2,	6,	5,	6,	3,	2,	1],
"3319040103940001" => [4,	3,	2,	6,	4,	4,	3,	6,	5,	6,	3,	4,	1],
"3319045006620001" => [4,	5,	1,	6,	4,	6,	4,	6,	4,	6,	3,	4,	2],
"3319031806730001" => [2,	7,	5,	2,	3,	6,	5,	2,	3,	6,	3,	4,	2],
"3319047112560053" => [3,	7,	5,	2,	5,	6,	5,	6,	5,	2,	3,	4,	2],
"3319044707660003" => [3,	6,	4,	6,	6,	5,	5,	6,	5,	2,	2,	4,	6],
"3319045107640001" => [4,	5,	3,	6,	6,	4,	4,	2,	4,	6,	2,	4,	6],
"3319047112630284" => [3,	3,	5,	2,	5,	6,	4,	6,	3,	2,	2,	4,	6],
"3319045604660007" => [2,	2,	4,	2,	6,	3,	5,	6,	2,	6,	2,	3,	4],
"3319044304630003" => [3,	1,	5,	2,	5,	6,	3,	6,	4,	2,	2,	3,	4],
"3319044807680002" => [5,	7,	3,	6,	4,	5,	3,	2,	5,	2,	2,	3,	6],

        ];


        $alternatif = DB::table("alternatif")->get();

        $i = 1;

        foreach ($alternatif as $key => $value) {
            
            foreach ($nilai as $key2 => $value2) {
                $j = 1;
                foreach ($value2 as $key3 => $value3) {
                    
                    if ($value->nik == $key2) {

                        $sub = DB::table("sub_kriteria")
                            ->where("kriteria_id", $key3+1)
                            ->where("nilai", $value3)
                            ->first();

                        
                        // error_log($i);
                        // error_log($key2);
                        // error_log($sub->id);
                        
                        

                        DB::table("alternatif_kriteria")->insert([
                            "kriteria_id"       => $key3+1,
                            "alternatif_id"     => $value->id,
                            "sub_kriteria_id"   => $sub->id
                        ]);
                    }
                    // DB::table("alternatif_kriteria")->insert([
                    //     "kriteria_id"       => $key3+1,
                    //     "alternatif_id"     => $value->id,
                    //     "sub_kriteria_id"   => $value3
                    // ]);
                    $j++;
                }

                $i++;
            }
        }


    }
}
