<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP ���� �׽�Ʈ</title>
</head>
<body>
 
<?php
echo "MySql ���� test<br>";
 
$db = mysqli_connect("localhost", "root", "��й�ȣ", "world");
 
if($db){
    echo "connect : success<br>";
}
else{
    echo "disconnect : fail<br>";
}
 
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
 
</body>
</html>


