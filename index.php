<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="apple-touch-icon" href="favicon.png">
        <title>Fatchan Muhammad Hakim</title>
        <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
        <link rel="import" href="component.html">

        <style>
            body{
                padding: 0px;
                margin:0px;
                background-color: #EEEEEE;
            }
            #countainer-table{
                margin-top: 20px;
            }
            
            #array_th{
                font-size: 13.8px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                text-align: center;
                cursor: pointer;
                color: #EEEDDE;
            }
            #countainer-tddata{
                font-size: 13.8px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                text-align: center;
                cursor: grabbing;
            }
            #countainer_ary{
                font-size: 13.8px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                text-align: center;
                cursor: grabbing;
                color: #4D455D;
            }
            #countainer-h3{
                font-size: 20.8px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                text-align: center;
                cursor: grabbing;
                color: #4D455D;
            }
            #countainer-h3:hover{
                font-size: 20.8px;
                font-family: monospace;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                text-align: center;
                cursor: grabbing;
                color: #FF8B13;
                display: block;
            }
        </style>
    </head>
    <body>
        <h3 id="countainer-h3">data mahasiswa</h3>
    <table id="countainer-table" align="center" cellpadding="20" cellspacing="0">
    <thead id="countainer-thead">
        <tr bgcolor="#4D455D" id="countainer-tbbgcr">
            <?php
                $array_table = ['no', 'nim', 'nama', 'nilai', 'keterangan', 'grade', 'predikat'];
                foreach($array_table as $array_x){
                    for($array_A = 0; $array_A <=1; $array_A++){
                        $no = $array_A;
                    };
            ?>
            <th id="array_th"><?= $array_x ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody id="countainer-tbody">
        <tr id="countainer-trd">
            <?php

                $array_m1 = ['nim' => '0010011', 'nama' => 'Fatchan Muhammad Hakim', 'nilai' => 100];
                $array_m2 = ['nim' => '0010012', 'nama' => 'Yudha Bhakti Wicaksono', 'nilai' => 68];
                $array_m3 = ['nim' => '0010013', 'nama' => 'Kurnia Suciyani', 'nilai' => 75];
                $array_m4 = ['nim' => '0010014', 'nama' => 'Reza Aditya Permana', 'nilai' => 25];
                $array_m5 = ['nim' => '0010015', 'nama' => 'Angga Saputra', 'nilai' => 90];
                $array_m6 = ['nim' => '0010016', 'nama' => 'Eka Rahmawati', 'nilai' => 20];
                $array_m7 = ['nim' => '0010017', 'nama' => 'Dimas Syahrul Firdaus', 'nilai' => 60];
                $array_m8 = ['nim' => '0010018', 'nama' => 'Fajar Nofrian Syahputra', 'nilai' => 40];
                $array_m9 = ['nim' => '0010019', 'nama' => 'Freany Mellyn Usmany', 'nilai' => 80];
                $array_m10 = ['nim' => '00100110', 'nama' => 'Hanief Widya Wardhana', 'nilai' => 20];

                $array_data = [
                    $array_m1, $array_m2, 
                    $array_m3, $array_m4, 
                    $array_m5, $array_m6, 
                    $array_m7, $array_m8, 
                    $array_m9, $array_m10];
                
                foreach($array_data as $ary){
                    $warna = ($no % 2 == 1) ? '#F7F7F7' : '#557153';
                    $ket_nilai = ($ary['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                    if($ary['nilai'] >= 85 && $ary['nilai'] <= 100) $grade='A';
                    else if($ary['nilai'] >= 75 && $ary['nilai'] < 85) $grade='B';
                    else if($ary['nilai'] >= 60 && $ary['nilai'] < 75) $grade='C';
                    else if($ary['nilai'] >= 30 && $ary['nilai'] < 60) $grade='D';
                    else if($ary['nilai'] >= 0 && $ary['nilai'] < 30) $grade='E';
                    else $grade = '';
                    
    
                    switch($grade){
                        case 'A' : $predikat = 'Memuaskan'; break;
                        case 'B' : $predikat = 'Bagus'; break;
                        case 'C' : $predikat = 'Cukup'; break;
                        case 'D' : $predikat = "Kurang"; break;
                        case 'E' : $predikat = 'Buruk'; break;
                        default : $predikat = '';
                    };
            ?>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $no ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $ary['nim']; ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $ary['nama']; ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $ary['nilai']; ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $ket_nilai ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $grade ?></td>
            <td id="countainer-tddata" align="center" bgcolor="<?= $warna ?>"><?php echo $predikat ?></td>
        </tr>
            <?php $no++;} ?>
    </tbody>
    <tfoot>
        <tr id="countainer-trinput">
            <?php
                $jumlah_siswa = count($array_data);
                $jumlah_nilai = array_column($array_data, 'nilai');
                $total_nilai = array_sum($jumlah_nilai);
                $max_nilai = max($jumlah_nilai);
                $min_nilai = min($jumlah_nilai);
                $nilai_rata2 = $total_nilai / $jumlah_siswa;

                $keterangan = array('Jumlah Mahasiswa' => $jumlah_siswa, 'Nilai Tertinggi' => $max_nilai, 'Nilai Rendah' => $min_nilai, 'Rata-Rata Nilai' => $nilai_rata2);

                foreach($keterangan as $arry => $hasil){ ?>                
                <th id="countainer_ary" colspan="6"><?= $arry; ?></th>
                <th id="countainer_ary"><?= $hasil; ?></td>
        </tr>
            <?php } ?>
    </tfoot>
</table>
    </body>
</html>