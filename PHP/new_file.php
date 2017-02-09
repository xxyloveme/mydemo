<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/common.css" />
	</head>
	<body>
	<?php
	//创建连接
	mysql_connect('127.0.0.1','root','abc5200308') or die('连接失败了。');
	mysql_select_db('test');
	mysql_query('set names utf8');
	$sq = mysql_query("select * from mydata");
	echo "<table border='1'>
			<tr>
			<th>编号</th>
			<th>品名</th>
			<th>价格</th>
			<th>数量</th>
			<th>描述</th>
			<th>操作</th>
			<th>操作</th>
		</tr>";
	while($row=mysql_fetch_assoc($sq)){
		echo "<tr><td>".$row['no']."</td>";
		echo "<td>".$row['shop']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['number']."</td>";
		echo "<td>".$row['describ']."</td>";
		echo "<td><a href='change.php?num=".$row['no']."'>修改<a></td>";
		echo "<td><a href='#'>删除</a></td></tr>";
	}
		echo "</table>";
	?>
	</body>
</html>