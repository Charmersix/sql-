<?php
include "check.php";
include "conn.php";

$id = $_GET['id'];
if(isset($id)){
    $sql = "delete from page where id =$id";
    $result = $conn->query($sql);
    if($result){
        echo "删除成功";
    }
}else{
    die("id不存在，无法删除");
}
$conn->close();
?>