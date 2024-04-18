<?php
include("include.inc");
//session_start();
$_SESSION["check"]="No";
?>
<html>
    登入失敗 請重新嘗試
</html>
<?php
echo "5秒後跳轉回登入頁";
header("Refresh:5;url=index.php");
?>