<?php
include "check.php";
include "conn.php";

$title = $_POST['title'];
$content = $_POST['content'];
if(isset($title) && isset($content)){
    //以免插入空内容
    $sql = "insert into page (title,content) values('$title','$content')";
    $result = $conn -> query($sql);
    if($result){
        echo "插入成功";
    }
    else{
        echo "插入失败";
    }
}
 $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charmersix_blog文章录入</title>
    <link rel="icon" href="https://blog-1308152021.cos.ap-beijing.myqcloud.com/image/202210091446366">
</head>
<body style="background-image: url(https://s1.ax1x.com/2022/10/13/xdNFBD.jpg) ; background-size: cover;background-attachment: fixed"><a href="index.html" style="color: tomato">首页</a>
<a href="page_list.php" style="color: tomato">文章列表</a>
<a href="page_add.php" style="color: tomato">新增内容</a>
<a href="page_logout.php" style="color: tomato">退出登录</a>
<center>
    <br><br><br><br><br><br><br>
    <h1 style="color: #ffb8e5">Charmersix_blog文章录入</h1>
    <hr>
    <form action="page_add.php" enctype="application/x-www-form-urlencoded" method="post" >

        标题:<input type="text" name="title" style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1);width:200px;"><br><br>
        内容:<input type="text" name="content"style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1);width:200px;height: 250px"><br><br>
        <br>
        <input type="submit" value="提交"style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1)"><br><br>

    </form>
</center>
</body>
</html>
