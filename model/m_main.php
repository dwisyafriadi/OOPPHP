<?php
include "model.php";
class m_main extends model
{
    public function __construct(){
      parent::__construct();

    }
    public function tambah(){
       $nama = $_POST['nama'];
        $nim  = $_POST['nim'];
        $umur = $_POST['umur'];
        $keluhan = $_POST['keluhan'];

        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){


       
        $this->conn->query("INSERT INTO datamahasiswa(nama, nim, umur,gambar,keluhan)
                            VALUES('$nama', '$nim', '$umur','$target_file','$keluhan')");
      }
    }
  
    public function read(){
      return $this->conn->query(
        "SELECT * FROM datamahasiswa"
      );
    }
    public function readwhere(){
      $id = $_GET['userid'];
      return $this->conn->query(
        "SELECT * FROM datamahasiswa
        WHERE id= $id"
      );
    }
    public function delete(){
      $id = $_GET['userid'];
      return $this->conn->query(
        "DELETE FROM datamahasiswa
        WHERE id= $id"
      );
    }
    public function update(){
      $id = $_GET['userid'];
      $nama = $_POST['nama'];
      $nim  = $_POST['nim'];
      $umur = $_POST['umur'];
      $target_dir = "gambar/";
      $target_file = $target_dir . basename($_FILES["foto"]["name"]);
      if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){

      return $this->conn->query(
        "UPDATE datamahasiswa
        SET nama = '$nama',
            nim = '$nim',
            umur = '$umur',
            gambar= '$target_file'
        WHERE id= '$id'" );
        }
    }
}
?>