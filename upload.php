<!-- 小刀娱乐网交：www.xiaodao.biz 流学习QQ群：595526 -->
<?php

$site='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$sites=str_replace("upload.php","",$site);
$base64 = htmlspecialchars($_POST['str']);
if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64, $result)) {
    $type = $result[2];
    $new_file = "uploads/" . time() . ".{$type}";
    if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64)))) {
        //echo '新文件保存成功：', $new_file;
        echo json_encode($sites.$new_file);
    }
}
?>