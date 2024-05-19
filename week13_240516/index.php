<meta charset = "utf-8">
<a href="adddb.php">新增資料到資料庫</a>
<?php

//連接資料庫
$link = @mysqli_connect('localhost','root','3319','img0516');

if(!$link){
    die("無法開啟資料庫<br>");
}
else{
    echo "成功開啟資料庫<br>";
}


//SQL語法
$SQL = "SELECT * FROM img";

$result = mysqli_query($link,$SQL);
echo "<table border='1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<tr>";
    echo "<td>{$row['No']}</td>";
    echo "<td>{$row['Name']}</td>";
    echo "<td>{$row['Dept']}</td>";
    echo "<td><img src='{$row['Img']}' alt='Image_MyFile'></td>";
    echo "<td><a href='del.php?No={$row['No']}'>刪除</a></td>";
    echo "<td><a href='update.php?No={$row['No']}'>修改</a></td>";
    echo "</tr>";
    echo "</tr>";
    
}
echo "</table>";

?>