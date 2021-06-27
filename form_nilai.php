<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">FORM NILAI MAHASISWA</h1>
<form method="GET" action="array_siswa.php" style="text-align: center;">
Nama : <input type="text" name="nama" value="" size="30"/><br/><br/>
NIM : <input type="number" name="nim" value=""
size="6"/><br/><br/>
Mata Kuliah :
<select name="matkul">
<option value="DDP">Dasar-Dasar Pemrograman</option>
<option value="BDI">Basis Data I</option>
<option value="WEB1">Pemrograman Web</option>
</select><br/><br/>
Nilai UTS : <input type="number" name="nilai_uts" value=""
size="6"/><br/><br/>
Nilai UAS : <input type="number" name="nilai_uas" value=""
size="6"/><br/><br/>
Nilai Tugas/Praktikum : <input type="number" name="nilai_tugas"
value="" size="6"/><br/><br/>
<input type="submit" value="Simpan" name="proses"/>
</form>



</body>
</html>