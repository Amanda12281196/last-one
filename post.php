<?
require_once("header.php");
?>
<div id="input">
<form method="post" action="input.php" name="form1">
<h1>提交留言</h1>
<p>姓名 ：<input type="text" name="name" size="20" class="y" />&nbsp;</p>
<p>性别 ：<input name="sex" type="radio" value="男" checked/>&nbsp;男&nbsp;<input type="radio" name="sex" value="女"/>&nbsp;女</p>
<p>Q Q　：<input type="text" name="qq" class="y" />&nbsp;(可选填)</p>
<p>Email：<input type="text" name="email" class="y" />&nbsp;(可选填)</p>
<p>留言内容：</p>
<p><textarea name="info" rows="5" cols="40"></textarea></p>
<p class="cen">
<input type="submit" value="我填好了" />
<input type="reset" value="我要重写">
</p>
<p class="cen1">刘新宇的留言板 Version 1.0</p>
</form>
</div>
</body>
</html>
