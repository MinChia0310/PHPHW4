<html>
<head>

</head>
<?php
echo "<body bgcolor='#CAD8E6'>";

?>
<center><h1>登入失敗</h1></center>
<form action="signinfo.php" method="post">
                    <ul>
                        <li>帳號:<input type="text" name="uname" required><!--required設定此項為必填-->
                        <li>密碼:<input type="text" name="pwd" required>
                        <li><input type="submit" value="Sign In">
                    </ul>
                </form>
</body>
</html>