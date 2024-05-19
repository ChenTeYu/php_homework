<meta charset='utf8'>

<?php
$No=$_POST["uNo"];
$Name=$_POST["uName"];
$Department=$_POST["uDept"];

//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '3319',  // 密碼
    'img0516');  // 預設使用的資料庫名稱
//SQL語法
$SQL="UPDATE Img SET Name='$Name', Dept='$Department' WHERE No='$No'";
if($result = mysqli_query($link, $SQL)){
    echo "更新成功";
}
echo "<br/><a href='index.php'>查看資料庫資料</a>";
?>