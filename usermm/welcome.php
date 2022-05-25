<html>
<head>
    <title>登录成功</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>

<div class="login">
    <p><strong>登录成功</strong></p>
    <span id="welcome_name">用户：XXXXXXX欢迎您！</span>
    <p><a href="userupdate.php">修改你的资料</a></p>
    <p><a href="logout.php">注销你的用户</a></p>
    <?php

    session_start();
    $ID =@ $_SESSION['id'];
    $user_name =@ $_SESSION['username'];
    if($user_name != "")
    {
        echo "<script>document.getElementById('welcome_name').innerText = '用户：$user_name 欢迎您！';</script>";
    }
    ?>
</div>

</body>
</html>
