<?php
    //Tạo kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
    //Nội dung xóa
    $sql = "DELETE FROM khoa where makh= 'XD'";
    //Thực thi truy vấn
    $kq = mysqli_query($conn, $sql);

    if($kq){
        echo "Xóa dữ liệu thành công";
    }else
        echo mysqli_error($kq);

    //Ngắt kết nối
    mysqli_close($conn);
?>