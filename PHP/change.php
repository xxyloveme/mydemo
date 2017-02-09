<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/common.css" />
	</head>
	<body>
		<?php
			$id = $_GET["num"];
			mysql_connect('127.0.0.1','root','abc5200308') or die('连接失败了。');
			mysql_select_db('test');
			mysql_query('set names utf8');	
			$rs=mysql_query("select * from mydata where no=$id");
			$row=mysql_fetch_assoc($rs);
		?>
		<form action="" method="get">
			<table border='1'>
				<tr>
					<td>品名：</td>
					<td><input type='text' value="<?php echo $row["shop"] ?>"/></td>
				</tr>
				<tr>
					<td>价格：</td>
					<td><input type='text' value='<?php echo $row["price"] ?>'/></td>
				</tr>
				<tr>
					<td>数量：</td>
					<td><input type='text' value='<?php echo $row["number"] ?>'/></td>
				</tr>
				<tr>
					<td>描述：</td>
					<td><input type='text' value='<?php echo $row["describ"] ?>'/></td>
				</tr>
				<tr><td colspan="2"><button>修改</button>&nbsp;<button>返回</button></td></tr>
			</table>
		</form>	
	</body>
</html>
