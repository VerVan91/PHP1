<?php

$dir1 = "img/small";
$dir2 = "img/big";

$files1 = array_slice(scandir($dir1), 2);
$files2 = array_slice(scandir($dir2), 2);

for ($i = 0; $i < count($files1); $i++) { ?>
  <a href="<?=$dir2."/".$files2[$i]?>" target="_blank"><img src="<?=$dir1."/".$files1[$i]?>" alt="#"/></a>
<?php } ?>
