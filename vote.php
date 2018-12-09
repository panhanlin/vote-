<?php 
header("Content-Type:text/html;charset=utf-8");
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
  $cip = $_SERVER["HTTP_CLIENT_IP"];
}
//获取当前时间
$date=date('y:m:d');
//以数组形式存入session
$info = array('ip'=>$cip,'time'=>$date);
//取出
$_SESSION['voteip'] = $info;
$arr = $_SESSION['voteip'];
//取出储存的日期
$t1 = strtotime($arr['time']);
//取出当前日期
$t2 = strtotime(date('y:m:d'));
//计算当前相差天数
$t = $t2 - $t1;
echo (int)($t / 86400);
//判断是否大于一天
if($t>=1){
//允许投票
 if(isset($_GET["voteBtn"])){
 	$values=$_GET["vote"];
 	$filename="vote.txt";
 	$f=fopen($filename, "r");
 	$list=fread($f, 100);
 	$rs=explode("|", $list);
 	$rs[$values] ++;
 	$s=implode("|", $rs);
 	$f=fopen($filename, "w");
 	fwrite($f, $s);	
 	fclose($f);
 	echo "<script>alert('成功投票！');location.href='view.php';</script>";
 }else{
	echo "<script>alert('你还没有投票！');location.href='index.php';</script>";
}
}else{
//拒绝
	echo "<script>alert('你只能投一次');location.href='view.php';</script>";
}
?>






 ?>
