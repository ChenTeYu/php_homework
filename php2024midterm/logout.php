<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
    echo "已登出高大資管論文管理系統<br>";
    echo "<a href='index.php'>返回登入頁</a>";
}else{
    echo "非法進入網頁<br>";
    echo "5秒後跳轉回登入頁";
    header("Refresh:5;url=index.php");
}

?>