<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
?>
<html>
<h1>
Author您好,歡迎進入論文投稿網頁
</h1>
<br>

<form action="showpaper.php" method="post">

    論文標題:<br>
    <input type="text" name="title"><br>
    作者姓名:<input type="text" name="Name"><br>
    作者Email:<input type="text" name="Email"><br>
    <p>
    論文摘要:<textarea name="Summary" value="" rows="15" cols="40"></textarea>
    </p>
    <p><input type="submit" value="提交"></p>

</form>

<br>
</html>
<?php
    echo "<a href='logout.php'>登出</a>";
}else{
    echo "非法進入網頁<br>";
    echo "5秒後跳轉回登入頁";
    header("Refresh:5;url=index.php");
}

?>