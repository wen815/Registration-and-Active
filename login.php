<html>
    <form id="reg" action="register.php" method="post" onsubmit="return chk_form();">
用户名：<input type="text" class="input" name="username" id="user"><br>
密&nbsp;码：<input type="password" class="input" name="password" id="pass"><br>
邮&nbsp;箱：<input type="text" class="input" name="email" id="email"><br>
<input type="submit" class="btn" value="登录">
</form>
</html>
<?php
include('mysqli_connect.php');

