<?php
  /* ----------- File upload ---------- */

  $path  = "../extras/users.txt";

if(file_exists($path)){
  // echo readfile($path);
  $handle = fopen($path, "r");
  $content = fread($handle,filesize($path));
  fclose($handle);

  echo $content;
}else{
  echo "File not found";
  $handle = fopen($path, "w");
  $content = 'brad' . PHP_EOL . 'sara';
  fwrite($handle, $content);

  fclose($handle);
}