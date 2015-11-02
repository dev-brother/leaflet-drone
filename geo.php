<?php
echo '<meta http-equiv="refresh" content="6" />';

//use this if you want the gps coords to jump randomnly around a specific location
//just remember to set maxZoom in index.js to a higher number or you won't see the updates 
$lathere = 22;
$lonhere = 12;

//$lat = mt_rand(0,90) + abs(1-mt_rand()/mt_rand()) ;
$lat = $lathere + (abs(1-mt_rand()/mt_rand())) ;

//$lon = mt_rand(0,90) + abs(1-mt_rand()/mt_rand()) ;
$lon = $lonhere + (abs(1-mt_rand()/mt_rand())) ;

echo $file =  '{'  . PHP_EOL .  '"geometry" : {'  . PHP_EOL .  '"type" : "Point",'  . PHP_EOL .  '"coordinates" : [' . $lon . ',' . $lat .  ']'  . PHP_EOL .  '},'  . PHP_EOL .  ' "type" : "Feature",'  . PHP_EOL .  ' "properties" : {}'  . PHP_EOL .  '}';

$jsonfile = fopen("geo.json", "w")  or die ("Unable to open file!");
fwrite($jsonfile, $file);
fclose($jsonfile);

?>
