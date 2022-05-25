<html>
<head>
    <title>注销用户</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="login">
    <p><strong>注销用户</strong></p>
    <span>谢谢您的访问，您已安全退出！</span>
    <p>重新登录请单击<a href="index.php">这里</a>。</p>
    <?php
    session_start();
    session_destroy();
    ?>
</div>
</body>
</html>
