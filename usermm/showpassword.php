
<html>
<head>
    <title>找回密码</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="login">
    <p><strong>查询结果</strong></p>
    <p id="user_name">用户名：</p>
    <p id="pwd">密码：</p>
    <p>单击<a href="index.php">这里</a>重新登录。</p>
    <?php
    include ('conn.php');
    @$user_name = $_POST['user_name'];
    @$answer = $_POST['answer'];
    $sql = mysqli_query($conn,"SELECT * FROM member WHERE username='$user_name'");
    $info = mysqli_fetch_array($sql);
    if($info['answer'] != $answer)
    {
        echo "<script>alert('答案输入错误！');history.back();</script>";
        exit;

    }
    else
    {
        $user_name1 = $info['username'];
        $password1 = $info['password'];
        echo "<script>document.getElementById('user_name').innerText='用户名： $user_name1';
            document.getElementById('pwd').innerText = '密码：$password1';</script>";

    }
    ?>
</div>

</body>
</html>
