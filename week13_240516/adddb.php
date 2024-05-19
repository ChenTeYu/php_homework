<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新增資料</title>
</head>
<body>
    <h2>新增資料到資料庫</h2>
    <form method="post" action="adddb.php" enctype="multipart/form-data">
        Name: <input type="text" name="sName"><br>
        Dept: <input type="text" name="sDept"><br>
        Img: <input type="file" name="MyFile"><br>
        <input type="submit" value="提交">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sName = $_POST["sName"];
        $sDept = $_POST["sDept"];
        $MyFile = $_FILES["MyFile"];

        // 連接資料庫
        $link = @mysqli_connect(
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '3319',         // 密碼
            'img0516');   // 預設使用的資料庫名稱

        if (!$link) {
            die("連接失敗: " . mysqli_connect_error());
        }

        // 確保上傳的檔案存在並且沒有錯誤
        if ($MyFile["error"] == UPLOAD_ERR_OK) {
            $ext = pathinfo($MyFile["name"], PATHINFO_EXTENSION);
            $uploadedFileName = time() . "." . $ext;

            // 移動上傳檔案到指定位置
            if (move_uploaded_file($MyFile["tmp_name"], $uploadedFileName)) {
                // SQL 語法
                $SQL = "INSERT INTO Img (Name, Dept, Img) VALUES ('$sName', '$sDept', '$uploadedFileName')";

                // 送出查詢
                if (mysqli_query($link, $SQL)) {
                    echo "<br/>新增成功";
                } else {
                    echo "<br/>新增失敗: " . mysqli_error($link);
                }

                echo "<br/><a href='index.php'>查看資料庫資料</a><br/>";
            } else {
                echo "檔案上傳失敗";
            }
        } else {
            echo "檔案上傳錯誤";
        }

        // 關閉連線
        mysqli_close($link);
    }
    ?>
</body>
</html>
