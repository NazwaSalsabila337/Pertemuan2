
<h1>Aplikasi Penilaian Mahasiswa</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Masukkan Nilai Jaringan Komputer: <input type="number" name="nilai1" required><br><br>
  Masukkan Nilai Sistem Basis Data: <input type="number" name="nilai2" required><br><br>
  Masukkan Nilai Desain Web: <input type="number" name="nilai3" required><br><br>
  <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nilai1 = $_POST["nilai1"];
  $nilai2 = $_POST["nilai2"];
  $nilai3 = $_POST["nilai3"];

  $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

  if ($rata_rata >= 70) {
    $status = "Lulus";
  } else {
    $status = "Tidak Lulus";
  }

  echo "<br>Nilai Rata-Rata: " . $rata_rata;
  echo "<br>Status Kelulusan: " . $status;
}
?>

</body>
</html>