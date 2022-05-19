<html>
<head></head>
<body>
   <h2>Daftar Program Kerja BEM</h2>
      <table border="1" cellpadding="5" cellspacing="0">
        <tr>
           <td>No</td>
           <td>Nama Program Kerja</td>
           <td>Surat Keterangan</td>
        </tr>
<?php

       include "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM programkerja"); while ($nomor5=mysqli_fetch_array($rs)) {
        echo "<tr>
                 <td>$nomor5[nomorProgram]</td>
                 <td>$nomor5[namaProgram]</td>
                 <td>$nomor5[suratKeterangan]</td>
              </tr>";
}
?>
</table> <br>
