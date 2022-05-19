<?php
include_once('./m_programKerja.php');

class c_programKerja {
      public $model;
      
      public function __construct(){
         $this->model = new m_programKerja();
      }

      public function invoke(){
         include 'v_programKerja.php';   
      }

      public function hapus($nomor){
         $proker = $this->model->hapusProgramKerja($nomor);
      }

      public function edit($nomor, $nama, $surat){
         $proker = $this->model->editProgramKerja($nomor, $nama, $surat);
      }

       public function set($nomor, $nama, $surat){
          $proker = $this->model->setProgramKerja($nomor, $nama, $surat);
      }
}
