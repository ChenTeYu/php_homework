<!DOCTYPE html>
<html>
<style>
        /* 文字區域的樣式 */
        .text-area {
            background-color: white; /* 白色背景 */
            border: 1px solid #ccc; /* 邊框 */
            padding: 10px; /* 內邊距 */
            border-radius: 5px; /* 圓角 */
        }
</style>
<head>
    <title>表單提交結果</title>
</head>

<h2>表單提交結果</h2>

<div class="text-area">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sName = isset($_POST["sName"]) ? $_POST["sName"] : "";
    $sPassword = isset($_POST["sPassword"]) ? $_POST["sPassword"] : "";
    // 將字串轉換為陣列
    $sCity = isset($_POST["sCity"]) ? (array)$_POST["sCity"] : array();
    $sGender = isset($_POST["sGender"]) ? $_POST["sGender"] : "";
    $sColor = isset($_POST["sColor"]) ? $_POST["sColor"] : "";
    $sDate = isset($_POST["sDate"]) ? $_POST["sDate"] : "";
    $sTime = isset($_POST["sTime"]) ? $_POST["sTime"] : "";
    $sEmail = isset($_POST["sEmail"]) ? $_POST["sEmail"] : "";
    $sFile = isset($_FILES["sFile"]) ? $_FILES["sFile"]["name"] : "";
    $sRange = isset($_POST["sRange"]) ? $_POST["sRange"] : "";
    $sHusband = isset($_POST["sHusband"]) ? $_POST["sHusband"] : array();
    $sComment = isset($_POST["sComment"]) ? $_POST["sComment"] : "";
    
    echo "姓名: " . $sName . "<br>";
    //echo "密碼: " . $sPassword . "<br>";
    // 使用 implode() 之前先確認 $sCity 是否為陣列
    echo "居住地: " . (is_array($sCity) ? implode(", ", $sCity) : $sCity) . "<br>";
    echo "性別: " . $sGender . "<br>";
    echo "最愛顏色: " . $sColor . "<br>";
    echo "生日: " . $sDate . "<br>";
    echo "時間: " . $sTime . "<br>";
    echo "郵箱: " . $sEmail . "<br>";
    echo "上傳的文件: " . $sFile . "<br>";
    echo "想參加程度: " . $sRange . "<br>";
    echo "飲食偏好: " . implode(", ", $sHusband) . "<br>";
    echo "意見: " . $sComment . "<br>";

    
}
?>
</div>

<body style="background-color: <?php echo isset($sColor) ? $sColor : '#ffffff'; ?>;">

</body>
</html>