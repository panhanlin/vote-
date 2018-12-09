<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>简易投票系统</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.vote{
			width: 200px;
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
	</style>
</head>
<body>
	<div class="vote">
		<h3>LPL全明星投票</h3>
		<form action="vote.php"method="get">
			<p><label><input type="radio" name="vote" value="0">UZI</label></p>
			<p><label><input type="radio" name="vote" value="1">MLXG</label></p>
			<p><label><input type="radio" name="vote" value="2">XIIAOHU</label></p>
			<p><label><input type="radio" name="vote" value="3">LETME</label></p>
			<p><label><input type="radio" name="vote" value="4">KASAR</label></p>
			<p><label><input type="radio" name="vote" value="5">ZITAI</label></p>
			<p><label><input type="radio" name="vote" value="6">MING</label></p>
			<p><label><input type="radio" name="vote" value="7">ABLE</label></p>
			<p><input type="submit" value="投票" name="voteBtn">
				<input type="button" value="查看" onclick="location='view.php'"></p>
		</form>
	</div>
</body>
</html>