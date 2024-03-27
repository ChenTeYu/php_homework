<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: #C5E3F5;
        }
        
        form {
            margin: 100px auto;
            width: 300px;
            background: #fff;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        input[type="text"], input[type="password"] {
            margin-bottom: 10px;
            width: calc(100% - 12px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            display: inline-block;
        }
        
        input[type="submit"] {
            padding: 8px;
            box-sizing: border-box;
            border: none;
            background: #70749C;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
    <form action="check.php" method="get">
        帳號:<input type="text" name="uID"><br>
        密碼:<input type="password" name="uPassword"><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>

<?php 
    session_start(); 
    $_SESSION["check"]="No"; 
    //header("Refresh:3"); 
    date_default_timezone_set("Asia/Taipei"); 
    echo date("Y/m/d h:i:sa"); 
?>
