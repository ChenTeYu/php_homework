<?php
include("include.inc");
//session_start();

?>

<meta charset="utf-8">
<?php
$_SESSION["check"]="No";
$accounts = [
    ['id' => 'chair', 'password' => '123'],
    ['id' => 'reviewer', 'password' => '234'],
    ['id' => 'author', 'password' => '345'],
];

$uID = $_POST["uId"];
$uPassword = $_POST["uPassword"];
$uCharacter = $_POST['character'];

if($uCharacter==="Chair"){
        if ("chair" === $uID && "123" === $uPassword) {
            $_SESSION["check"]="Yes";
            setcookie('userName', $uID, time() + 7 * 24 * 60 * 60);
            header("Location:chair.php");
        }else{
            header("Location:fail.php");
        }
}else if($uCharacter==="Reviewer"){
        if ("reviewer" === $uID && "234" === $uPassword) {
            $_SESSION["check"]="Yes";
            setcookie('userName', $uID, time() + 7 * 24 * 60 * 60);
            header("Location:reviewer.php");
        }else{
            header("Location:fail.php");
        }
}else if($uCharacter==="Author"){
        if ("author" === $uID && "345" === $uPassword) {
            $_SESSION["check"]="Yes";
            setcookie('userName', $uID, time() + 7 * 24 * 60 * 60);
            header("Location:author.php");
        }else{
            header("Location:fail.php");
        }
   
}