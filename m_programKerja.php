<?php
  class m_programKerja {
        private $nomorProgram;
        private $namaProgram;
        private $suratKeterangan;
        public $hasil = array();

        public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
            require "koneksiMVC.php";
            $rs = $mysqli->query("INSERT INTO programkerja VALUES ('$nomorProgram','$namaProgram', '$suratKeterangan')");
            return $rs;
        }

        public function getSemuaProgramKerja() { 
            require "koneksiMVC.php";
            $rs = $mysqli->query("SELECT * FROM  ");
            $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }

        $this->hasil = $rows; return $this->hasil;
}

       public function editProgramKerja($nomorProgram,$namaProgram, $suratKeterangan) { require "koneksiMVC.php";
            $rs = $mysqli->query("UPDATE programkerja SET NOMORPROGRAM ='$nomorProgram', NAMAPROGRAM ='$namaProgram', SURATKETERANGAN = '$suratKeterangan' WHERE NOMORPROGRAM = '$nomorProgram'");
            return $rs;
       }

       public function hapusProgramKerja($nomorProgram) { require "koneksiMVC.php";
            $rs = $mysqli->query("DELETE FROM programkerja WHERE NOMORPROGRAM ='$nomorProgram'");
            return $rs;
       }
}
