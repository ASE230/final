<?php

  function readCSV($filepath) {
    $filecontent = [];
    $file = fopen($filepath, "r");
    
    while(($data = fgetcsv($file)) !== FALSE) {
      $filecontent[] = $data;
    }

    fclose($file);

    return $filecontent;
  }

  function writeCSV($filepath, $filedata) {
    $file = fopen($filepath, "w");

    foreach($filedata as $row) {
      fputcsv($file, $row);
    }

    fclose($file);
  }

?>