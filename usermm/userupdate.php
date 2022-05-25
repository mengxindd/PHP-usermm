<html>
<head>
    <title>修改用户资料</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="image/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript">
        function chkinput(form)
        {
            if(form.user_name.value == "")
            {
                form.user_name.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入昵称。";
                form.user_name.select();
                return false;
            }
            if(form.password.value == "")
            {
                form.password.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入密码。";
                form.password.select();
                return false;
            }
            if(form.password1.value == "")
            {
                form.password1.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入确认密码。";
                form.password1.select();
                return false;
            }
            if(form.password.value.length < 3)
            {
                form.password.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：密码长度应该大于3位。";
                form.password.select();
                return false;
            }
            if(form.password.value != form.password1.value)
            {
                form.password1.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：密码与重复密码不一致。";
                form.password.select();
                return false;
            }
            if(form.true_name.value == "")
            {
                form.true_name.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入真实姓名。";
                form.true_name.select();
                return false;
            }
            if(form.email.value == "")
            {
                form.email.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请填写EMAIL。";
                form.email.select();
                return false;
            }
            if(form.email.value.indexOf('@') < 0)
            {
                form.email.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入正确的EMAIL。";
                form.email.select();
                return false;
            }
            if(form.tel.value == "")
            {
                form.tel.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入联系电话。";
                form.tel.select();
                return false;
            }
            if(form.answer.value == "")
            {
                form.answer.style.backgroundColor = "red";
                document.getElementById("error_note").innerText = "提示：请输入密码提示答案。";
                form.answer.select();
                return false;
            }
            document.getElementById("error_note").innerText = "&nbsp;";
            return true;
        }
    </script>
</head>
<body>

<?php
session_start();
@$ID = $_SESSION['id'];
require_once ('conn.php');
$sql = mysqli_query($conn,"SELECT * FROM member WHERE id='$ID'");
$info = mysqli_fetch_array($sql);

?>
<form name="form1" method="post" action="userupdateok.php">
    <div class="register">
        <table class="register_tb">
            <caption>修改用户信息</caption>
            <tr>
                <td class="tb_alignr">用户名：</td>
                <td class="tb_alignl"><input type="text" name="user_name" id="user_name"  readonly="readonly"
                                             value="<?php echo $info['username'];?>">*</td>
            </tr>
            <tr>
                <td class="tb_alignr">密&nbsp;&nbsp;码：</td>
                <td class="tb_alignl"><input type="text" name="password" id="password" value="<?php echo $info['password']?>">*</td>
            </tr>
            <tr>
                <td class="tb_alignr">确认密码：</td>
                <td class="tb_alignl"><input type="text" name="password1" id="password1" value="<?php echo $info['password']?>" >*</td>
            </tr>
            <tr>
                <td class="tb_alignr">真实姓名：</td>
                <td class="tb_alignl"><input type="text" name="true_name" id="true_name" value="<?php echo $info['truename']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr">性别：</td>
                <td class="tb_alignl"><input type="radio" name="sex" id="sex_m" value="男" <?php if($info['sex'] === "男"){echo "checked = 'checked'";} ?> >
                    <label for="sex_m">男</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="sex" id="sex_w" value="女" <?php if($info['sex'] === "女"){echo "checked = 'checked'";} ?> >
                    <label for="sex_w">女</label>
                </td>
            </tr>
            <tr>
                <td class="tb_alignr">E-mail：</td>
                <td class="tb_alignl"><input type="text" name="email" id="email" value="<?php echo $info['email']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr">电话：</td>
                <td class="tb_alignl"><input type="text" name="tel" id="tel" value="<?php echo $info['tel']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr">QQ：</td>
                <td class="tb_alignl"><input type="text" name="qq" id="qq" value="<?php echo $info['qq']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr">地址：</td>
                <td class="tb_alignl"><input type="text" name="address" id="address" value="<?php echo $info['address']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr">密码提示问题：</td>
                <td class="tb_alignl">
                    <select name="question" id="question">
                        <option value="0">你的小学名字叫什么？</option>
                        <option value="1">你的中学名字叫什么？</option>
                        <option value="2">你的大学名字叫什么？</option>
                        <option value="3">你的母亲名字叫什么？</option>
                        <option value="4">你的父亲名字叫什么？</option>
                        <option value="5">你的配偶名字叫什么？</option>
                        <?php
                        $question = $info['question'];
                        echo "<script>document.getElementById('question').selectedIndex = $question;</script>"
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="tb_alignr">密码提示答案：</td>
                <td class="tb_alignl"><input type="text" name="answer" id="answer" value="<?php echo $info['answer']?>"></td>
            </tr>
            <tr>
                <td class="tb_alignr"><input type="hidden" name="authority" id="authority" value="<?php echo $info['authority']?>">
                    <input type="hidden" name="id1" id="id1" value="<?php echo $info['id']?>"></td>
                <td class="tb_alignl"><input type="submit" name="button1" id="button1" value="确 认">
                    <input type="reset" name="button2" id="button2" value="重 写">
                </td>
            </tr>
        </table>
        <p id="error_note" style="text-align: left;font-size:12px;color:red;">&nbsp;</p>
    </div>
</form>
</body>
</html>
