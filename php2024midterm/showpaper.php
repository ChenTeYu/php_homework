<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
?>

<html>
    以下為論文內容：
    <br>
</html>
<?php

if(isset($_POST["title"])){
    $title = nl2br($_POST['title']);
    echo "標題:".$title."<br>";
}
if(isset($_POST["Name"])){
    $Name = nl2br($_POST['Name']);
    echo "姓名:".$Name."<br>";
}
if(isset($_POST["Email"])){
    $Email = nl2br($_POST['Email']);
    echo "郵箱:".$Email."<br>";
}

if(isset($_POST["Summary"])){
    $Summary = nl2br($_POST['Summary']);
    echo "摘要:".$Summary."<br>";
}


echo "<a href='logout.php'>登出</a>";


}else{
    echo "非法進入網頁<br>";
    echo "5秒後跳轉回登入頁";
    header("Refresh:5;url=index.php");
}

?>