<?php
include '../functions.php';
session_start();
if(!isset($_SESSION["reallytrash"])){
    header('location:../index.php'); exit;
}

if(isitok($_SESSION['idlog'])===false){
    header('location:../index.php');
    exit;
  }


$id=$_GET["who"];

if(shactd($id) > 0){
    echo "<script>
alert('Data berhasil dihapus');
document.location.href='../maindata.php';
    </script>
    ";
    
} else {echo "<script>
    alert('Data gagal dihapus');
    document.location.href='../maindata.php';
              </script>;"
    ;
}
?>