<html>
<head>
    <title>注册成功</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="login">
    <p><strong>注册成功</strong></p>
    <p>恭喜您！您已注册成功。</p>
    <p>请单击<a href="index.php">这里</a>登录</p>
    <?php
    include ('conn.php');
    @$user_name = $_POST['user_name'];
    $sql = mysqli_query($conn,"SELECT * FROM member WHERE username='$user_name'");
    $info = mysqli_fetch_array($sql);
    if($info ===  true)
    {
        echo "对不起，该昵称已经被占用了。";
        header("location:regfail.php");

    }
    else
    {

        @$user_name = $_POST['user_name'];
        @$password = $_POST['password1'];
        @$true_name = $_POST['true_name'];
        @$sex = $_POST['sex'];
        @$email = $_POST['email'];
        @$tel = $_POST['tel'];
        @$qq = $_POST['qq'];
        @$address = $_POST['address'];
        @$question = $_POST['question'];
        @$answer = $_POST['answer'];
        @$authority = $_POST['authority'];
        mysqli_query($conn,"INSERT INTO member (username,password,question,answer,truename,sex,address,tel,qq,email,authority)
          VALUES('$user_name','$password','$question','$answer','$true_name','$sex','$address','$tel','$qq','$email','$authority')");

    }
    ?>
</div>
</body>
</html>
