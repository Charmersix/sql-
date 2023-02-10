<?php
include "check.php";
include "conn.php";
$action = $_GET['action'];
if($action =="edit"){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content =$_POST['content'];

    $sql = "update page set title = '$title', content = '$content' where id =$id";
    $result = $conn->query($sql);
    if($result){
        echo "修改成功";
    }else{
        echo "修改失败";
    }
    header("location:page_edit.php?id=$id");
}else{
    $id = $_GET['id'];
    if(!isset($id))
    {
        die("id不存在，不能修改");
    }
    $sql = "select id,title,content from page where id=$id";
    $result = $conn->query($sql);
    if($result){
        $page = $result->fetch_array(MYSQLI_BOTH);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charmersix_blog内容修改</title>
    <link rel="icon" href="https://blog-1308152021.cos.ap-beijing.myqcloud.com/image/202210091446366">
</head>
<body style="background-image: url(https://s1.ax1x.com/2022/10/13/xdNFBD.jpg) ; background-size: cover;background-attachment: fixed">
<a href="index.html" style="color: tomato">首页</a>
<a href="page_list.php" style="color: tomato">文章列表</a>
<a href="page_add.php" style="color: tomato">新增内容</a>
<a href="page_logout.php" style="color: tomato">退出登录</a>
<center>
    <br><br><br><br><br><br><br>
    <h1 style="color: #ffb8e5">Charmersix_blog内容修改</h1>
    <hr>
    <form action="page_edit.php?action=edit&id=<?=$page['id'];?>" enctype="application/x-www-form-urlencoded" method="post" >

        标题:<input type="text" name="title" style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1);width:200px" value="<?=$page['title'];?>"><br><br>
        内容:<input type="text" name="content"style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1);width:200px;height: 250px" value="<?=$page['content'];?>"><br><br>
        <br>
        <input type="submit" value="修改"style="background: rgba(255,255,255,0.5);color: rgba(255,255,255,1)"><br><br>

    </form>
</center>
</body>
</html>

<?php
$conn->close();
?>
