<?php
    //Tạo kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
    //Nội dung
    $sql = "INSERT INTO khoa(makh,tenkh) VALUES ('XD', 'Xây dựng')";
    //Thực thi truy vấn
    $kq = mysqli_query($conn, $sql);

    if($kq){
        echo "Thêm thành công";
        var_dump($kq);
    }else
        echo mysqli_error($kq);

    //Ngắt kết nối
    mysqli_close($conn);
?>