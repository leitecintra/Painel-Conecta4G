<?php
// Get Project path
define('_PATH', dirname(__FILE__));

// Zip file name
$filename = 'conecta.zip';
$zip = new ZipArchive;
$res = $zip->open($filename);
if ($res === TRUE) {

  // Unzip path
  $path = _PATH;

  // Extract file
  $zip->extractTo($path);
  $zip->close();

  echo 'Descompactado !';
} else {
  echo 'Erro !';
}
