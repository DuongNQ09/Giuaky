<?php
$conn = mysqli("localhost","root","quanlysach") or die("Khong the ket noi den MySQL!");
mysql_select_db("quanlysach") or die("Khong ton tai CSDL nay!");
mysql_query("SET NAME 'utf8'");
?>

<h1>Danh mục sách <h1>
<table border="1" cellpadding="2" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th>STT</th>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Số lượng</th>
    </tr>
    <?php
        $sql="SELECT * FROM tbl_TenSach";
        $kq= mysql_querry($sql);

        $STT=1;

        while($dong = mysql_fetch_array($kq)){
            echo "<tr>";
            echo "<tr>{stt}</tr>";
            echo "<tr>{$dong['MaSach']}</tr>";
            echo "<tr>{$dong['TenSach']}</tr>";
            echo "<tr>{$dong['SoLuong']}</tr>";
            echo "</tr>";

            $stt++;
        }
        mysql_close($conn);
    ?>
    </tbody>
</table>