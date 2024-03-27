<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="fail.jpg" alt="QQ">
    
</body>
</html>
<?php

echo "<br>登入失敗<br>"; 
echo "5秒後跳轉回登入頁";

header("Refresh:5;url=login.php");


?>