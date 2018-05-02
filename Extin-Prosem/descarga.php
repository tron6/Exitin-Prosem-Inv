<?php
if (isset($_POST['descarga'])) { 
  $file = 'pdf/REPORTE-DE-REVISION.pdf';
  if (is_file($file)) {
    $filename = "FORMATO REPORTE DE REVISIÒN.pdf"; // el nombre con el que se descargará, puede ser diferente al original
    /*header("Content-Type: application/octet-stream");*/
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    readfile($file);
  } else {
    die("Error: no se encontró el archivo '$file'");
  }
}
?>