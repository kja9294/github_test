<?php  
 
$link=mysqli_connect("localhost", "root", "비밀번호", "world");  
if (!$link)
{  
    echo "MySQL 접속 에러 : ";
    echo mysqli_connect_error();
    exit();  
}  
 
mysqli_set_charset($link,"utf8"); 
 
 
$sql="select * from solar";
 
$result=mysqli_query($link,$sql);
$data = array();   
if($result){  
    
    while($row=mysqli_fetch_array($result)){
        array_push($data, 
            array('id'=>$row[0]
        ));
    }
 
    header('Content-Type: application/json; charset=utf8');
$json = json_encode(array("webnautes"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
echo $json;
 
}  
else{  
    echo "SQL문 처리중 에러 발생 : "; 
    echo mysqli_error($link);
} 
 
 
 
mysqli_close($link);  
   
?>
[출처] 안드로이드+MYSQL+PHP 웹서버 연동하기 -2|작성자 흐이준

