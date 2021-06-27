<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $nim = $_GET['nim'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
    $ns5 = ['id' => 5, 'nim' => $nim, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
    ?>
    <h1 style="text-align: center;">HASIL NILAI MAHASISWA</h1>
    <form action="nilai_nilai2.php" method="GET">
      <table border="1" width="100%">
        <thead style="text-align: center;">
          <tr>
            <th>ID</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
        <?php
        $id = 1;
        foreach($ar_nilai as $ns) {
            echo '<tr><td>'.$id.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $id++;
        }
        ?>
        </tbody>
      </table>
    </form>
    <div style="text-align: center;">
    <?php 
      echo '<br/>Nama : '.$nama_siswa;
      echo '<br/>Mata Kuliah : '.$mata_kuliah;
      echo '<br/>Nilai UTS : '.$nilai_uts;
      echo '<br/>Nilai UAS : '.$nilai_uas;
      echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;  
    ?>
    </div>
  

</body>
</html>