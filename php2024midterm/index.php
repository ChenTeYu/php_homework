<?php 

    include("include.inc");
    //session_start();
    $_SESSION["check"]="No"; 
    
    date_default_timezone_set("Asia/Taipei"); 
    echo date("Y/m/d h:i:sa")."<br>";

    if(isset($_COOKIE["userName"])){
        echo $_COOKIE["userName"]."歡迎回來";
    }else{
        echo "初次見面您好";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <form action="check.php" method="post">
    
    <h1>高大資管論文投稿系統</h1>
    請選擇你的角色:
    <select name="character" required>
    <option>Chair</option>
    <option>Reviewer</option>
    <option>Author</option>
    </select>
    <br/>

    帳號:<input type="text" name="uId" value="<?php echo isset($_COOKIE["userName"]) ? $_COOKIE["userName"] : ''; ?>" required>
    <br/>
    密碼:<input type="password" name="uPassword" required>
    <br/>
    <input type="submit" value="送出">
    
</form>

</html>
<?php

?>