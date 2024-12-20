<?php
    //Tạo kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
    //Nội dung lấy dữ liệu
    $sql = "SELECT * FROM khoa";
    //Thực thi truy vấn
    $kq = mysqli_query($conn, $sql);

    //Kiểm tra bảng có dữ liệu hay không mysqli_num_rows => >0 thì có dữ liệu
    if(mysqli_num_rows($kq) > 0){
        //có dữ liệu => duyệt qua từng dòng của bảng với hàm mysqli_fetch_asoc
        //giá trị trả về là mảng tương ứng với dữ liệu lấy được
        while ($row = mysqli_fetch_assoc($kq)){
            echo "Mã khoa: " . $row["makh"] . " - Tên khoa: " . $row["tenkh"] . "<br>";
        }

    }else{
        //Không có dữ liệu
        echo "Bảng không có dữ liệu";
    }



    //Ngắt kết nối
    mysqli_close($conn);
?>