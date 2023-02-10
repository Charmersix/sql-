<?php
include "check.php";
include "conn.php";
$id = $_GET['id']?$_GET['id']:1;
$sql = "select id,title,content from page where id = '$id'";
$result = $conn->query($sql);
if($result){
    $page = $result->fetch_array(MYSQLI_BOTH);
}
?>
<!DOCTYPE html>
<html lang="en">
<head  style="background-image: url(https://s1.ax1x.com/2022/10/13/xdNFBD.jpg) ; background-size: cover;background-attachment: fixed">
    <meta charset="UTF-8">
    <title><?=$page['title'];?></title>
    <link rel="icon" href="https://blog-1308152021.cos.ap-beijing.myqcloud.com/image/202210091446366">
</head>
<body  style="background-image: url(https://s1.ax1x.com/2022/10/13/xdNFBD.jpg) ; background-size: cover;background-attachment: fixed">
<a href="index.html" style="color: tomato">首页</a>
<a href="page_list.php" style="color: tomato">文章列表</a>
<a href="page_add.php" style="color: tomato">新增内容</a>
<a href="page_logout.php" style="color: tomato">退出登录</a>
<center>
    <br><br><br><br><br><br><br><br>
    <h1 style="color: #ffb8e5"><?=$page['title'];?></h1>
    <hr>
    <p  style="color: #ffb8e5">
        <?=$page['content'];?>
    </p>


</center>
</body>
</html>

<?php
$conn->close();
?>


