<?php
require "fonts.php";
function svg_flicker($container, $bColor, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text1, $text2, $text3){
  //A funtion to generate flicker theme
  if($font == "codystar"){
    $font_face = font_CodyStar();
  }
  if($font == "icklips"){
    $font_face = font_Icklips();
  }
  if($font == "lakkireddy"){
    $font_face = font_lakkiReddy();
  }
  if($font == "neonled"){
    $font_face = font_neonLed();
  }
  $conainter_style='';
  if($container != "off"){
    $container_style = ".container {
      text-align: ".$tAlign.";
      border: 5px solid ".$bColor.";
      height: auto;
      width: 70%;
      border-radius: 20px;
      padding: 10px;
      background: ".$bgColor.";
      margin: 0 auto;
      margin-top: 50px;
      min-width: 220px;
      box-shadow: 0px 0px 50px 4px red;
      animation: border-flicker 2s linear infinite;
      -webkit-animation: border-flicker 2s linear infinite;
      -moz-animation: border-flicker 2s linear infinite;
    }";
  }
  echo "
  <style>
  ".$font_face.$container_style."
  .container{
    text-align: ".$tAlign."
  }

  .text{
    color:".$tColor.";
    font-family: '".$font."', sans-serif;
    font-size: ".$fSize.";
    letter-spacing: ".$lSpacing.";
    font-weight: ".$fWeight.";
    text-shadow: 0px 0px 29px ".$tColor.";
    animation: text-flicker 3s linear infinite;
    -webkit-animation: text-flicker 3s linear infinite;
    -moz-animation: text-flicker 3s linear infinite;
  }

  #offset {
    animation: letter-flicker 2s linear infinite;
    -webkit-animation: letter-flicker 2s linear infinite;
    -moz-animation: letter-flicker 2s linear infinite;
  }

  @keyframes text-flicker {
    0%,
    8%,
    12% {
      opacity:0.1;
    }
    2% {
      opacity:1;
    }
    9% {
      opacity:1;
    }
    20% {
      opacity:1;
    }
    25% {
      opacity:0.3;
    }
    30% {
      opacity:1;
    }
    70% {
      opacity:0.7;
    }
    72% {
      opacity:0.2;
    }
    77%,
    100% {
      opacity:0.9;
    }
  }

  @keyframes letter-flicker {
    0%,
    2%,
    21% {
      opacity:0.1;
    }
    4%,
    19%,
    23%,
    80%,
    87% {
      opacity:1;
    }
    83% {
      opacity:0.4;
    }
  }

  @keyframes border-flicker {
    0% {
      opacity:0.9;
    }
    2%,
    8%,
    100% {
      opacity:1;
    }
    4%,
    70% {
      opacity:0.9;
    }
  }
  </style>
  <div xmlns='http://www.w3.org/1999/xhtml' class='container'>
    <span class='text'>".$text1."<span id='offset'>".$text2."</span>".$text3."</span>
  </div>
  ";
}
function svg_glow($container, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text){
  //A funtion to generate glow theme
  if($font == "codystar"){
    $font_face = font_codyStar();
  }
  if($font == "icklips"){
    $font_face = font_icklips();
  }
  if($font == "lakkireddy"){
    $font_face = font_lakkiReddy();
  }
  if($font == "neonled"){
    $font_face = font_neonLed();
  }
  $container_style = '';
  echo "
  <style>
  ".$font_face.$container_style."
  .container{
    text-align: ".$tAlign."
  }

  .text {
    font-size: ".$fSize.";
    font-family: ".$font.";
    font-weight: ".$fWeight.";
    letter-spacing: ".$lSpacing.";
    animation: text_glow 2s ease-in-out infinite alternate;
    -webkit-animation: text_glow 2s ease-in-out infinite alternate;
    -moz-animation: text_glow 2s ease-in-out infinite alternate;
  }

  @-webkit-keyframes text_glow {
    from {
      color: #fff;
      text-shadow: 0 0 10px ".$tColor.", 0 0 20px ".$tColor.", 0 0 30px ".$tColor.", 0 0 40px ".$tColor.", 0 0 50px ".$tColor.", 0 0 60px ".$tColor.", 0 0 70px ".$tColor.", 0 0 90px ".$tColor.";
    }
    to {
      color: gray;
    }
  </style>
  <div xmlns='http://www.w3.org/1999/xhtml' class='container'>
    <span class='text'>".$text."</span>
  </div>
  ";
}

function svg_transform($container, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $transformColor, $tAlign, $text){
  //A funtion to generate transform theme
  if($font == "codystar"){
    $font_face = font_CodyStar();
  }
  if($font == "icklips"){
    $font_face = font_Icklips();
  }
  if($font == "lakkireddy"){
    $font_face = font_lakkiReddy();
  }
  if($font == "neonled"){
    $font_face = font_neonLed();
  }
  $container_style = '';
  echo "
  <style>
  ".$font_face.$container_style."
  .container{
    text-align: ".$tAlign.";
  }

  .text {
    color: ".$bgColor.";
    font-size: ".$fSize.";
	  font-weight: ".$fWeight.";
	  font-family: ".$font.";
    letter-spacing : ".$lSpacing.";
	  position: relative;
    text-shadow: -1px -1px 0 ".$tColor.", 1px -1px 0 ".$tColor.", -1px 1px 0 ".$tColor.", 1px 1px 0 ".$tColor.";
  }

  .text::before {
	  top: 0;
	  left: 0;
	  width: 0;
	  height: 100%;
	  color: ".$transformColor.";
	  overflow: hidden;
	  position: absolute;
	  content: attr(data-text);
	  border-right: 2px solid #37b9f1;
	  animation: transform 5s linear infinite;
    -webkit-animation: transform 5s linear infinite;
    -moz-animation: transform 5s linear infinite;
  }

  @keyframes transform {
    0%,
	  10%,
	  100% {
   		width: 0;
    }

    70%,
	  90% {
	  	width: 100%;
	  }
  }
  </style>
  <div xmlns='http://www.w3.org/1999/xhtml' class='container'>
    <spam class='text' data-text='".$text."'>".$text."</spam>
  </div>
  ";
}

function svg_wave($container, $bgColor, $font, $fSize, $fWeight, $lSpacing, $tColor, $tAlign, $text){
  //A funtion to generate wave theme
  if($font == "codystar"){
    $font_face = font_CodyStar();
  }
  if($font == "icklips"){
    $font_face = font_Icklips();
  }
  if($font == "lakkireddy"){
    $font_face = font_lakkiReddy();
  }
  if($font == "neonled"){
    $font_face = font_neonLed();
  }
  $container_style = '';
  echo "
  <style>
  ".$font_face.$container_style."
  body{
  	justify-content: ".$tAlign.";
  	display:flex;
  	font-family: '".$font."', sans-serif;
  }

  span {
  	font-size: ".$fSize.";
  	position: absolute;
  	font-weight:".$fWeight.";
  	letter-spacing: ".$lSpacing.";
  }

  .text1 {
  	color: ".$bgColor.";
  	-webkit-text-stroke: 0.5px ".$tColor.";
  }

  .text2 {
  	color: ".$tColor.";
  	animation: animate 4s ease-in-out infinite;
  }

  @keyframes animate {
  	0%,
  	100% {
		  clip-path: polygon(
		  	0% 45%,
		  	16% 44%,
		  	33% 50%,
		  	54% 60%,
		  	70% 61%,
		  	84% 59%,
		  	100% 52%,
		  	100% 100%,
	  		0% 100%
		  );
	  }

	  50% {
		  clip-path: polygon(
		  	0% 60%,
		  	15% 65%,
			  34% 66%,
		  	51% 62%,
		  	67% 50%,
		  	84% 45%,
		  	100% 46%,
		  	100% 100%,
		  	0% 100%
	  	);
  	}
  }
  </style>
  <body xmlns='http://www.w3.org/1999/xhtml'>
  <span class='text1'>".$text."</span>
  <span class='text2'>".$text."</span>
  </body>
  ";
}
?>
