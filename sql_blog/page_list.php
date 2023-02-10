<?php
include "check.php";
include "conn.php";
$sql = "select id,title,content from page";
$result = $conn->query($sql);
if ($result){
    $list = $result->fetch_all(MYSQLI_BOTH);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charmersix_blog内容列表</title>
    <link rel="icon" href="https://blog-1308152021.cos.ap-beijing.myqcloud.com/image/202210091446366">
</head>
<body style="background-image: url(https://s1.ax1x.com/2022/10/13/xdNFBD.jpg) ; background-size: cover;background-attachment: fixed"><a href="index.html" style="color: tomato">首页</a>
<a href="page_list.php" style="color: tomato">文章列表</a>
<a href="page_add.php" style="color: tomato">新增内容</a>
<a href="page_logout.php" style="color: tomato">退出登录</a>
<center>
    <br><br><br><br><br><br><br><br>
    <h1 style="color: #ffb8e5">Charmersix_blog内容列表</h1>
    <hr>
    <ul>
        <?php
        foreach ($list as $p){
        ?>
            <li>
                <a href="page_detail.php?id=<?=$p['id']; ?>" style="color: aquamarine">
                    <?=$p['title']; ?>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="page_detail.php?id=<?=$p['id']; ?>" style="color: darkturquoise">查看</a>
                <a href="page_edit.php?id=<?=$p['id']; ?>" style="color: darkturquoise"> | 修改</a>
                <a href="page_delete.php?id=<?=$p['id']; ?>" style="color: darkturquoise"> | 删除</a>
            </li>
        <?php
        }
        ?>
     </ul>

</center>
</body>
</html>
