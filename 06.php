<?php
$conn = mysqli_connect('localhost', 'root', '', 'qlsv23s', '3306');
$sql = "SELECT * FROM sinhvien";
// Thực thi truy vấn
$kq = mysqli_query($conn, $sql);

// Tính tổng học bổng
$total_hocbong = 0;
while ($row = mysqli_fetch_assoc($kq)) {
    $total_hocbong += $row['hocbong'];
    $sinhviens[] = $row; // Lưu trữ kết quả để lặp lại trong bảng
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary mt-3">DANH SÁCH SINH VIÊN</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mã SV</th>
                    <th scope="col">Họ tên SV</th>
                    <th scope="col">Phái</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Học bổng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sinhviens as $row) { ?>
                <tr>
                    <td><?php echo $row["masv"]; ?></td>
                    <td><?php echo $row["hoten"]; ?></td>
                    <td><?php echo $row["phai"] ? "Nam" : "Nữ"; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($row["ngaysinh"])); ?></td>
                    <td><?php echo number_format($row["hocbong"]); ?> VNĐ</td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4" class="text-right font-weight-bold">Tổng học bổng</td>
                    <td class="font-weight-bold"><?php echo number_format($total_hocbong); ?> VNĐ</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
