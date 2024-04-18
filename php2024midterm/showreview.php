<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
?>
    <html>
    以下為評審之論文評論評語：
    <br>
    </html>

<?php
if(isset($_POST["Comment"])){
    $Comment = nl2br($_POST['Comment']);
    echo $Comment."<br>";
    echo "<a href='logout.php'>登出</a>";
}
}else{
    echo "非法進入網頁<br>";
    echo "5秒後跳轉回登入頁";
    header("Refresh:5;url=index.php");
}

?>

