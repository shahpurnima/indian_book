<?php
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
  echo "<script>js_checkcode = '" . $new_number ."'</script>";

  $fileName = md5(time()).".png";
  $filePath = SAE_TMP_PATH.$fileName;

  imagepng($num_image, $filePath);
  $stor = new SaeStorage();
  $stor->upload("maindomain", "checkcode.png" , $filePath);
  imagedestroy($num_image);
?>