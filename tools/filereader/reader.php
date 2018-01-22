<?php

    $f = fopen("../../Downloads/MSR322748_170503_120814.csv", "r");
    
    // Read line from the text file and write the contents to the client
    for($x = 0; $x < 27; $x++){
      fgets($f);
    }

    //Read up to the end of the file
    $c=0;
    $maxT = -200;
    $minT = 200;
    $maxax = -1e8;
    $maxay = -1e8;
    $maxaz = -1e8;
    $maxhum = -1e8;
    //while ($line = fscanf($f, "%s%%*c %s%*c %f%*c %f%*c %f%*c %f%*c %f%*c %f\n")) {
    while ($line = fscanf($f, "%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%f\n")) {
      list($date, $hour, $time, $accx, $accy, $accz, $hum, $temp) = $line;

      //Max temperature
      if($temp > $maxT)
        $maxT = $temp;
      //Min temperature
      if($temp < $minT)
        $minT = $temp;
      //Max acc along x
      if(abs($accx) > $maxax)
        $maxax = $accx;
      //Max acc along y
      if(abs($accy) > $maxay)
        $maxay = $accy;
      //Max acc along z
      if(abs($accz) > $maxaz)
        $maxaz = $accz;
      //Max Humidity
      if($hum > $maxhum)
        $maxhum = $hum;
    }

    echo '<p id="hidden-content" style="display: none">';
    echo "Max temperature: " . round($maxT, 3) . " °C <br>";
    echo "Min temperature: " . round($minT,3) . "°C <br>";
    echo "Max acceleration: " . round(sqrt($maxax*$maxax + $maxay*$maxay + $maxaz*$maxaz), 3) . " g <br>";
    echo "Max humidity: " . round($maxhum, 3) . " % <br>";
    echo '</p>';

    fclose($f);
?>
