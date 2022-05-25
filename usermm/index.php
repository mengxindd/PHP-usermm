<html>
<head>
    <title>会员管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <style>
        body{
            background-image:url(image/blue.jpg)

        }
    </style>
</head>
<body>

<form name="form1" method="post" action="chkuser.php">
    <div style="text-align: center"><h2>用户管理系统登录</h2></div><br>
    <div class="login">
        <table class="login_tb">
            <tr>
                <td>账&nbsp;&nbsp;号：<input type="text" name="username" id="username" ></td>
            </tr>
            <tr>
                <td>密&nbsp;&nbsp;码：<input type="password"  name="pwd" id="pwd" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="button1" id="button1" value="登 录">
                    <input type="reset" name="button2" id="button2" value="重 置"></td>
            </tr>
            <tr>
                <td><a href="register.php">注册新用户</a>&nbsp;&nbsp;<a href="lostpassword.php">找回密码</a> </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>

