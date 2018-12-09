<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>投票信息查询</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.vote{
			width: 500px;
			border: 1px solid #f90;
			margin: 10px auto;
		}
		h3{
			height: 25px;
			background-color: #f90;
			text-align: center;
			font: 15px/25px 微软雅黑;
		}
		p{
			margin: 5px 0px;
			padding-left: 20px;
		}
		img{
			height: 10px;
		}
		label{
			width: 200px;
		}
	</style>
</head>
<body>
	<?php 
	$sum =0 ;
	$filename ="vote.txt";
	$f=fopen($filename,"rs");
	$list=fread($f, 100);
	$rs=explode("|", $list);
	for($i=0;$i<7;$i++){

		$sum += $rs[$i];
	}
	 ?>
<div class="vote">
	<h3>LPL全明星投票结果</h3>
			<p><label>UZI[<?php echo $rs[0]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[0]/$sum*100); ?>" alt=""></p>
			<p><label>MLXG[<?php echo $rs[1]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[1]/$sum*100); ?>" alt=""></p>
			<p><label>XIIAOHU[<?php echo $rs[2]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[2]/$sum*100); ?>" alt=""></p>
			<p><label>LETME[<?php echo $rs[3]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[3]/$sum*100); ?>" alt=""></p>
			<p><label>KASAR[<?php echo $rs[4]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[4]/$sum*100); ?>" alt=""></p>
			<p><label>ZITAI[<?php echo $rs[5]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[5]/$sum*100); ?>" alt=""></p>
			<p><label>MING[<?php echo $rs[6]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[6]/$sum*100); ?>" alt=""></p>
			<p><label>ABLE[<?php echo $rs[7]."票" ?>]</label>
				<img src="bg.gif" width="<?php echo round($rs[7]/$sum*100); ?>" alt=""></p>
	
</div>

</body>
</html>