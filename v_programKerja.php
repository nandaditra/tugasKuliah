<html>
<head></head>
<body>
     <h2>Daftar Program Kerja BEM</h2>
            <table border=”1” cellpadding=”5” cellspacing=”0”>
               <tr>
                 <td>No</td>
                 <td>Nama ProKer</td>
                 <td>Surat Keterangan (SK)</td>
                 <td colspan=”2”>Pengaturan</td>
            </tr>
            <?php include "koneksiMVC.php";
            $rs = $mysqli->query("SELECT * FROM programkerja"); while ($proker=mysqli_fetch_array($rs)) {
            echo "<tr>
                     <td>$proker[nomorProgram]</td>
                     <td>$proker[namaProgram]</td>
                     <td>$proker[suratKeterangan]</td>
                     <td><a href='process.php?nomorProgram=$proker[nomorProgram]&o=2'>Edit</a></td>
                    <td><a href='index.php?nomorProgram=$proker[nomorProgram]&o=1'onClick=\”return confirm('Are you sure ?')\”\>Hapus</a></td>
                 </tr>";
            }
            ?>
            </table> <br>

<form action="process.php" method="post">
    <input type="submit" name="mit" value="Tambah">
</form>

</body>
</html>