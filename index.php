<?php include_once("c_programKerja.php");

$controller = new c_programKerja(); 

if(isset($_POST['mit'])){
   $nomor = $_POST['nomor'];
   $nama = $_POST['nama'];
   $surat = $_POST['surat']; 
   if ($_POST['mit'] == 1) {
       $controller->edit($nomor, $nama, $surat);
   } else {
       $controller->set($nomor, $nama, $surat);
   }  

}

if(isset($_GET['o']) && null !== $_GET['nomorProgram']){
    $controller->hapus($_GET['nomorProgram']);
}
    $controller->invoke();
