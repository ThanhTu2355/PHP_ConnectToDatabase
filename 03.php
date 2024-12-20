<?php
    //Tạo kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
    //Nội dung thêm
    $sql = "UPDATE khoa SET tenkh= 'Kỹ thuật xây dựng' where makh= 'XD'";
    //Thực thi truy vấn
    $kq = mysqli_query($conn, $sql);

    if($kq){
        echo "Cập nhật dữ liệu thành công";
    }else
        echo mysqli_error($kq);

    //Ngắt kết nối
    mysqli_close($conn);
?>