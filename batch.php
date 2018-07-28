<?php
 header('Content-type:image/jpeg');
  $user = $_POST['username'];
  $source='img/batch.jpg'; 
  $image=@imagecreatefromjpeg($source);
 
 $font='.img/Raleway-Black.ttf';
 $color=ImageColorAllocate($image, 0, 0, 0);
 $x=300;
 $y=740;
 imagettftext($image, 100, 0, $x, $y, $color, $font, $user);
 imagejpeg($image);
 ?>