<?php
session_start();

// Generate captcha code
$captcha_code = rand(10000, 99999);
$_SESSION['captcha'] = $captcha_code;

// Create image
header('Content-Type: image/png');
$image = imagecreate(100, 40);

// Colors
$bg_color = imagecolorallocate($image, 255, 255, 255); // white
$text_color = imagecolorallocate($image, 0, 0, 0);     // black

// Add text
imagestring($image, 5, 20, 10, $captcha_code, $text_color);

// Output image
imagepng($image);
imagedestroy($image);
?>
