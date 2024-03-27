<?php
session_start();
?>

<meta charset="utf-8">
<?php

//GET透過網址傳值 較好控制值

$sID="A1113319";
$sPassword="a1113319";

$uID = $_GET["uID"];
$uPassword = $_GET["uPassword"];


if($sID==$uID && $sPassword==$uPassword){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
    //echo "登入成功";
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
    //echo "登入失敗";
}

ob_flush();

echo $uID." ".$uPassword;

?>