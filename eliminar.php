<?php

    $id=$_GET['id'];
    include("db.php");

    $sql="delete from carta where id='".$id."'";
    $result=mysqli_query($conexion,$sql);

    if($result){
        echo "<script languaje='JavaScript'>
            alert('Los datos se eliminaron correctamente');
            location.assign('ninos.php');
        </script>";
    }else{
        echo "error";
    }

?>