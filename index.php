<?php
// 设置图片路径
$image_path = 'images/app.png'; // 替换为你的图片路径
$empty_image_path = 'images/1.png'; // 替换为你的1x1透明图片路径

// 获取 HTTP Referer
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// 检查 Referer 是否包含 gitcode 或 csdn
if (strpos($referer, 'gitcode') !== false || strpos($referer, 'csdn') !== false) {
    // 如果 Referer 包含 gitcode 或 csdn，返回指定图片
    header('Content-Type: image/png');
    readfile($image_path);
} else {
    // 如果 Referer 不包含 gitcode 或 csdn，返回 1x1 透明图片
    header('Content-Type: image/png');
    readfile($empty_image_path);
}
?>
