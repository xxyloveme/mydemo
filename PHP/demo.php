<?php
$servername = "127.0.0.1";
$username = "root";
$password = "abc5200308";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT * FROM infornation";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // 输出每行数据
    echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Hobby</th>
		<th>Tel</th>
		<th>Email</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
		echo "<td>" . $row['sex'] . "</td>";
		echo "<td>" . $row['hobby'] . "</td>";
		echo "<td>" . $row['telphone'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "</tr>";
//      echo "<br> name: ". $row["name"]. "age: ". $row["age"]. " " . $row["telphone"];
    }
    echo "</table>";
} else {
    echo "0 个结果";
}
$conn->close();
?>