<meta charset='utf8'>

<?php

$sNo=$_GET["No"];
echo $sNo;
//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '3319',  // 密碼
    'img0516');  // 預設使用的資料庫名稱
//SQL語法
$SQL="DELETE FROM Img WHERE No='$sNo'";
//送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>刪除成功";
}
mysqli_close($link);
echo "<br/><a href='index.php'>查看資料庫資料</a>";
?>