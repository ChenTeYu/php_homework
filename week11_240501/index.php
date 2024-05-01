
<meta charset='utf8'>

<?php
//連接資料庫
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '3319',  // 密碼
            'form0501');  // 預設使用的資料庫名稱
    
    if (!$link)
            die("無法開啟資料庫!<br/>");
    else
            echo "資料庫:開啟成功!<br/>"; 

//SQL語法
$SQL="SELECT * FROM formdata";

//送出查詢
$result = mysqli_query($link, $SQL);

//結果轉陣列
echo "<table border='1'>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["sName"]."</td><td>".$row["sPassword"]."</td><td>".$row["sCity"]."</td><td>".$row["sGender"]."</td><td>".$row["sBDay"]."</td><td>".$row["sGender"]."</td><td><a href='del.php?No=".$row["No"]."'>刪除</a></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>