<html>
<head>

</head>
<body>
   <form action="index.php" method="post">
        <?php 
        if(isset($_GET['o'])){
             include "koneksiMVC.php";
             $rs = $mysqli->query("SELECT * FROM programkerja WHERE nomorProgram='$_GET[nomorProgram]'");
             $data = mysqli_fetch_array($rs);
             echo '<h2>Ubah Informasi Program Kerja</h2><input type="hidden" name="bun" value="1"';
        } else {
             echo '<h2>Menambah Program Kerja Baru</h2><input type="hidden" name="bun" value="2"';
        }
?>

<p>Nomor Program Kerja </p>
<input type="number" name="nomor" value="<?php if (isset($data['nomerProgram'])) echo $data['nomerProgram'];?>" ><br><br>

<p>Nama Program Kerja</p>

<input type="text" name="nama" value="<?php if (isset($data['namaProgram'])) echo $data['namaProgram'];?>" ><br><br>

<p>Surat Keterangan</p>

<input type="text" name="surat" value="<?php if (isset($data['suratKeterangan'])) echo $data['suratKeterangan'];?>" ><br><br>

<input type="submit" name="mit" value="Save">

</form>
</body>
</html>
