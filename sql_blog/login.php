<?php

include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select id,username from user where username = '$username' and password = '$password'";
//$sql = "select id,username from user where username = '$username' and password = '1'or '1'='1'";
$result = $conn->query($sql); //sql语句传进去,和数据库交互
//print ($sql);
//$result=mysql_query($sql);
//$row = mysql_fetch_array($result);
if($conn->errno>0){
    die($conn->error);
}
if($row = $result->fetch_array(MYSQLI_BOTH)){
//if($row){
    //将交互结果反馈出来
    echo "登录成功,欢迎".$row['username'];
    $_SESSION['LOGIN']=true;
    $a=<<<EOF
    <a href="index.html" style="color: tomato">首页</a>
    <a href="page_list.php" style="color: tomato">文章列表</a>
    <a href="page_add.php" style="color: tomato">新增内容</a>
    <a href="page_logout.php" style="color: tomato">退出登录</a>
EOF;
echo $a;
}
else{
    echo "登录失败";
}

$conn->close();
?>





