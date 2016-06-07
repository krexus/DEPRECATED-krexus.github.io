<?php
  $changelog = file_get_contents("https://dl.dropboxusercontent.com/u/12469927/krexus_Changelog.txt");
  $headMarker = substr_count($changelog,"====================");

  //for ($i=0; $i < $headMarker; $i++) {
  $i=1;
    $lastPos = strpos($changelog, "====================");
    $currPos = strpos($changelog, "====================", $lastPos + strlen("===================="));
    $dateExtract = substr($changelog, $lastPos, ($currPos - $lastPos));
    echo $lastPos."<br>";
    echo $currPos;
    echo $dateExtract;
    $lastPos = $currPos;
    //$dateStart = (strpos($changelog, 'majorsection') - 12);
    //$dateEnd = (strpos($changelog, 'boxfooter') - 17);
    //$dateExtract = substr($changelog, $start, ($end - $start));
  //}

//  strpos($mystring, $findme);

?>