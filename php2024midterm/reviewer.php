<?php
include("include.inc");
//session_start();
if($_SESSION["check"]=="Yes"){
?>
    <html>
    <h1>
    Reviewer您好,歡迎進入論文評論網頁
    </h1>
    <br>

    <form action="showreview.php" method="post">

    論文評審決定:
    <input type="radio" name="interest" value="Accept"> Accept 
    <input type="radio" name="interest" value="Minor Revision"> Minor Revision 
    <input type="radio" name="interest" value="Reject"> Reject
    <br>
    <p>
    論文評論評語:<textarea name="Comment" value="" rows="15" cols="40"></textarea>
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
