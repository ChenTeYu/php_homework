<meta charset='utf8'>

<form action="adddb.php" method="post">
姓名:<input type="text" name="sName" value="" placeholder="please input your name" required>
密碼:<input type="password" name="sPassword" required>
<br>
居住地:
<input type="checkbox" name="sCity" value="台北" checked> 台北
<input type="checkbox" name="sCity" value="新北"> 新北
<input type="checkbox" name="sCity" value="桃園"> 桃園
<input type="checkbox" name="sCity" value="台中"> 台中
<input type="checkbox" name="sCity" value="台南"> 台南
<input type="checkbox" name="sCity" value="高雄"> 高雄

<br>
性別:
<input type="radio" name="sGender" value="男"> 男
<input type="radio" name="sGender" value="女"> 女
<input type="radio" name="sGender" value="不願透漏"> 不願透漏
<br>

你生日:
<input type="date" name="sBDay">
郵箱:
<input type="email" name="sEmail">
<br>


<input type="submit">
</form>


<!--
<input type="text" name="sName"><br/>
<input type="text" name="sDept"><br/>
-->