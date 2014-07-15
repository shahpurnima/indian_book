<?php
  session_start();
  for ($i = 0; $i < 4; $i++)
  {
    $new_number .= dechex(rand(0, 15));
  }
  $_SESSION[check_checks] = $new_number;
  $num_image = imagecreate(80, 24);
  imagecolorallocate($num_image, 133, 133, 133);
  for ($i = 0; $i < strlen($_SESSION[check_checks]); $i++)
  {
    $font = mt_rand(15, 20);
    $x    = mt_rand(1, 10) + 80 * $i / 4;
    $y    = mt_rand(1, 8);
    $color= imagecolorallocate($num_image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imagestring($num_image, $font, $x, $y, $_SESSION[check_checks][$i], $color);
  }
  
  $fileName = md5(time()).".png";
  $filePath = SAE_TMP_PATH.$fileName;

  imagepng($num_image, $filePath);
  $stor = new SaeStorage();
  //$stor->delete("maindomain", "changecode.png");
  $stor->upload("maindomain", "tmp/".$fileName , $filePath);
  imagedestroy($num_image);

  echo $new_number.",".$fileName;
?>