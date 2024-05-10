<?php
$conn = mysqli_connect("localhost", "root", "", "quanlysach") or die("Không thể kết nối đến MySQL!");
mysqli_set_charset($conn, "utf8");

?>

<h1>Danh mục sách</h1>
<table border="1" cellpadding="2" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th>STT</th>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Số lượng</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tbl_TenSach";
        $result = mysqli_query($conn, $sql);
        $stt = 1;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$stt}</td>";
            echo "<td>{$row['MaSach']}</td>";
            echo "<td>{$row['TenSach']}</td>";
            echo "<td>{$row['SoLuong']}</td>";
            echo "</tr>";

            $stt++;
        }
        mysqli_close($conn);
        ?>
    </tbody>
</table>
