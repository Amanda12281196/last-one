<?php
header("Content-Type: text/html;charset=utf-8");
$counterFile="conter.xml";
function displayCounter($counterFile){
$fp  =  fopen($counterFile,"rw");
$num =  fgets($fp,5);
$num += 1;
print "<div id=\"footer\">刘新宇的留言板 Version 1.0&nbsp;&nbsp;&nbsp;您是第&nbsp;"."$num"."&nbsp;位</div>";
exec("rm -rf $counterFile");
exec("echo $num > $counterFile");
}
if(!file_exists($counterFile)){
exec("echo 0 > $counterFile");
}
displayCounter($counterFile);
?>
</body>
</html>