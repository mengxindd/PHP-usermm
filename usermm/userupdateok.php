<html>
<head>
    <title>修改成功</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="login">
    <p><strong>修改成功</strong></p>
    <p>资料修改成功。</p>
    <p>返回首页，请单击<a href="index.php">这里</a>登录</p>
</div>
</body>
</html>
<?php
session_start();
@$ID = $_POST['id1'];
@$user_name = $_POST['user_name'];
@$password = $_POST['password1'];
@$question = $_POST['question'];
@$answer = $_POST['answer'];
@$true_name = $_POST['true_name'];
@$sex = $_POST['sex'];
@$address = $_POST['address'];
@$tel = $_POST['tel'];
@$qq = $_POST['qq'];
@$email = $_POST['email'];
@$authority = $_POST['authority'];
include ('conn.php');
mysqli_query($conn,"UPDATE member SET username='$user_name',
  password='$password',question='$question',answer='$answer',
  truename='$true_name',sex='$sex',address='$address',tel='$tel',
  qq='$qq',email='$email',authority='$authority' WHERE id='$ID'");
?>
