<html>
<head>
    <title>找回密码</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="login">
    <p><strong>查询问题</strong></p>
    <form name="form1" method="post" action="showpassword.php">
        <p>问题提示：
            <select name="question" id="question" disabled="disabled" style="height:30px;width:200px;line-height: 28px;">
                <option value="0">你的小学名字叫什么？</option>
                <option value="1">你的中学名字叫什么？</option>
                <option value="2">你的大学名字叫什么？</option>
                <option value="3">你的母亲名字叫什么？</option>
                <option value="4">你的父亲名字叫什么？</option>
                <option value="5">你的配偶名字叫什么？</option>
                <?php
                $user_name = $_POST['user_name'];
                require_once ('conn.php');
                $sql = mysqli_query($conn,"SELECT * FROM member WHERE username='$user_name'");
                $info = mysqli_fetch_array($sql);
                if($info == false)
                {
                    echo "<script>alert('无此用户。');history.back();</script>;";
                    exit;
                }
                else
                {
                    $question = $info['question'];
                    echo "<script>document.getElementById('question').selectedIndex = $question;</script>";
                }
                ?>
            </select>
        </p>
        <p>问题答案：<input type="text" name="answer" id="answer" style="height: 30px;width: 200px;">
            <input type="hidden" name="user_name" id="user_name" value="<?php echo $user_name;?>"></p>
        <p><input type="submit" name="button1" id="button1" value="提 交">
            <input type="reset" name="button2" id="button2" value="重 置"></p>
    </form>


</div>

</body>
</html>