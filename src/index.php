<?php
header("Content-Type: image/svg+xml");
require "generator.php";
$height = isset($_GET['height']) ? $_GET['height'] : "200";
$width =  isset($_GET['width']) ? $_GET['width'] : "100%";
?>
<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<!--
 * my-naam.svg - https://github.com/KodingKhurram/my-naam.svg
 * Version - v1.0.0
 * Licensed under the MIT license - https://opensource.org/licenses/MIT
 * Copyright (c) 2022 Mohammed Khurram (KodingKhurram)
-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="<?php echo $width;?>" height="<?php echo $height;?>">
  <foreignObject x="0" y="0" width="100%" height="100%">
    <?php
    echo get_SVG($_GET);
    ?>
  </foreignObject>
</svg>
