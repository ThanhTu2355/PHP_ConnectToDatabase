<?php
    //Kết nối đến mySQL
    $conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
    if(!$conn){
        die ("Kết nối thất bại: " .mysqli_connect_error());
    }else{
        echo 'Kết nói thành công';
    }

    //Ngắt kết nói
    mysqli_close($conn);
?>