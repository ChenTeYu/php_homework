<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
    echo "歡迎進入CHAIR頁面";
    echo "<a href='logout.php'>登出</a>";
}else{
    echo "非法進入網頁<br>";
    echo "5秒後跳轉回登入頁";
    header("Refresh:5;url=index.php");
}

?>