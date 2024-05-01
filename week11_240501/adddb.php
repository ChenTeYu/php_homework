<meta charset='utf8'>
<?php
$sName = $_POST["sName"];
$sPassword = $_POST["sPassword"];

// 從表單中獲取居住地
// 因為居住地是多選項，所以使用 isset() 函數來檢查是否選中
if(isset($_POST["sCity"])) {
    // 如果選中了，將選中的值存入一個陣列中
    $sCity = $_POST["sCity"];
} else {
    // 如果沒有選中，則將 $sCity 設置為空陣列或其他適合的默認值
    $sCity = array();
}

// 從表單中獲取性別
$sGender = $_POST["sGender"];

// 從表單中獲取生日
$sBDay = $_POST["sBDay"];

// 從表單中獲取郵箱
$sEmail = $_POST["sEmail"];

//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '3319',  // 密碼
    'form0501');  // 預設使用的資料庫名稱

//SQL語法
$SQL="INSERT INTO formdata(sName, sPassword, sCity, sGender, sBDay, sEmail) VALUES('$sName', '$sPassword', '$sCity', '$sGender', '$sBDay', '$sEmail')";
//送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<BR/>新增成功";
}

mysqli_close($link);
echo "<br/><a href='index.php'>查看資料庫資料</a>";
?>