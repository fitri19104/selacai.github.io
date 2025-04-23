<?php
    
    $data = mysqli_connect("localhost","root","","selacai");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>