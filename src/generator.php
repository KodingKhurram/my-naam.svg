<?php
require "theme.php";
function get_SVG($params){
  //A function to generate svg
  $svg= '';
  if(isset($params['theme'])){
    //flicker
    if($params['theme'] == "flicker"){
      $container = isset($params['container']) ? $params['container'] : "on";
      $bgColor = isset($params['background-color']) ? $params['background-color'] : "black";
      $bColor = isset($params['border-color']) ? $params['border-color'] : "#FF00E6";
      $font = isset($params['font']) ? $params['font'] : "Arial";
      $fSize = isset($params['font-size']) ? $params['font-size'] : "2rem";
      $fWeight = isset($params['font-weight']) ? $params['font-weight'] : "normal";
      $lSpacing = isset($params['letter-spacing']) ? $params['letter-spacing'] : "0px";
      $tColor = isset($params['color']) ? $params['color'] : "#1086e8";
      $tAlign = isset($params['text-align']) ? $params['text-align'] : "left";
      $text1 = isset($params['text1']) ? $params['text1'] : "Text1";
      $text2 = isset($params['text2']) ? $params['text2'] : "Text2";
      $text3 = isset($params['text3']) ? $params['text3'] : "Text3";

      $svg = svg_flicker($container, $bColor, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text1, $text2, $text3);
    }
    //glow
    if($params['theme'] == "glow"){
      $container = isset($params['container']) ? $params['container'] : "on";
      $font = isset($params['font']) ? $params['font'] : "Arial";
      $fSize = isset($params['font-size']) ? $params['font-size'] : "2rem";
      $fWeight = isset($params['font-weight']) ? $params['font-weight'] : "normal";
      $lSpacing = isset($params['letter-spacing']) ? $params['letter-spacing'] : "0px";
      $tColor = isset($params['color']) ? $params['color'] : "#00fff2";
      $tAlign = isset($params['text-align']) ? $params['text-align'] : "left";
      $text = isset($params['text']) ? $params['text'] : "Text";

      $svg = svg_glow($container, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text);
    }
    //transform
    if($params['theme'] == "transform"){
      $container = isset($params['container']) ? $params['container'] : "on";
      $bgColor = isset($params['background-color']) ? $params['background-color'] : "black";
      $font = isset($params['font']) ? $params['font'] : "Arial";
      $fSize = isset($params['font-size']) ? $params['font-size'] : "2rem";
      $fWeight = isset($params['font-weight']) ? $params['font-weight'] : "normal";
      $lSpacing = isset($params['letter-spacing']) ? $params['letter-spacing'] : "0px";
      $tColor = isset($params['color']) ? $params['color'] : "#00fff2";
      $transformColor = isset($params['transform-color']) ? $params['transform-color'] : "#37b9f1";
      $tAlign = isset($params['text-align']) ? $params['text-align'] : "left";
      $text = isset($params['text']) ? $params['text'] : "Text";

      $svg = svg_transform($container, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $transformColor, $tAlign, $text);
    }
    //wave
    if($params['theme'] == "wave"){
      $container = isset($params['container']) ? $params['container'] : "on";
      $bgColor = isset($params['background-color']) ? $params['background-color'] : "transparent";
      $font = isset($params['font']) ? $params['font'] : "Arial";
      $fSize = isset($params['font-size']) ? $params['font-size'] : "2rem";
      $fWeight = isset($params['font-weight']) ? $params['font-weight'] : "normal";
      $lSpacing = isset($params['letter-spacing']) ? $params['letter-spacing'] : "0px";
      $tColor = isset($params['color']) ? $params['color'] : "#03a9f4";
      $tAlign = isset($params['text-align']) ? $params['text-align'] : "left";
      $text = isset($params['text']) ? $params['text'] : "Text";

      $svg = svg_wave($container, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text);
    }
  }
  return $svg;
}
?>
