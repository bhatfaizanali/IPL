<?php
include("./csv.inc.php");
header('Content-Type: text/plain');

$matches = read_csv("./data/matches.csv");

$_2007 = array();
$_2008 = array();
$_2009 = array();
$_2010 = array();
$_2011 = array();
$_2012 = array();
$_2013 = array();
$_2014 = array();
$_2015 = array();
$_2016 = array();
$_2017 = array();

$handle = fopen("./data/deliveries.csv", "r");
$deliveries = array();
$lineNumber = 1;
$matchesLine = 1;

foreach($matches as $match){
    if($matchesLine == 1) { $matchesLine++; continue;}
    $i =0;
    while (($raw_string = fgets($handle)) !== false) {
        $row = str_getcsv($raw_string);
        if($lineNumber != 1){
                if($row[0] == $match[0]){
                    switch ($match[1]) {
                        case '2017':
                            if (array_key_exists($row[8],$_2017)){
                                if(strlen($row[18]) > 1){
                                    $_2017[$row[8]]++;
                                 }
                            } else{
                                $_2017[$row[8]] = 0;
                            }
                            break;
                        case '2016':
                            if (array_key_exists($row[8],$_2016)){
                                if(strlen($row[18]) > 1){
                                    $_2016[$row[8]]++;
                                 }
                            } else{
                                $_2016[$row[8]] = 0;
                            }                           
                         break; 
                        case '2015':
                            if (array_key_exists($row[8],$_2015)){
                                if(strlen($row[18]) > 1){
                                    $_2015[$row[8]]++;
                                 }
                            } else{
                                $_2015[$row[8]] = 0;
                            }                           
                        break; 
                        case '2014':
                            if (array_key_exists($row[8],$_2014)){
                                if(strlen($row[18]) > 1){
                                    $_2014[$row[8]]++;
                                 }
                            } else{
                                $_2014[$row[8]] = 0;
                            }                            
                        break;
                        case '2013':
                            if (array_key_exists($row[8],$_2013)){
                                if(strlen($row[18]) > 1){
                                    $_2013[$row[8]]++;
                                 }
                            } else{
                                $_2013[$row[8]] = 0;
                            }                            
                        break;
                        case '2012':
                            if (array_key_exists($row[8],$_2012)){
                                if(strlen($row[18]) > 1){
                                    $_2012[$row[8]]++;
                                 }
                            } else{
                                $_2012[$row[8]] = 0;
                            }                            
                        break; 
                        case '2011':
                            if (array_key_exists($row[8],$_2011)){
                                if(strlen($row[18]) > 1){
                                    $_2011[$row[8]]++;
                                 }
                            } else{
                                $_2011[$row[8]] = 0;
                            }                            
                        break; 
                        case '2010':
                            if (array_key_exists($row[8],$_2010)){
                                if(strlen($row[18]) > 1){
                                    $_2010[$row[8]]++;
                                 }
                            } else{
                                $_2010[$row[8]] = 0;
                            }                            
                        break; 
                        case '2009':
                            if (array_key_exists($row[8],$_2009)){
                                if(strlen($row[18]) > 1){
                                    $_2009[$row[8]]++;
                                 }
                            } else{
                                $_2009[$row[8]] = 0;
                            }                            
                        break; 
                        case '2008':
                            if (array_key_exists($row[8],$_2008)){
                                if(strlen($row[18]) > 1){
                                    $_2008[$row[8]]++;
                                 }
                            } else{
                                $_2008[$row[8]] = 0;
                            }                           
                         break;
                        default:
                            # code...
                            break;
                    }
                }
                else{
                break;
                }
            }
            $lineNumber++;
            }
        }
fclose($handle);


arsort($_2017);
arsort($_2016);
arsort($_2015);
arsort($_2014);
arsort($_2013);
arsort($_2012);
arsort($_2010);
arsort($_2009);
arsort($_2008);

print_r(array_slice($_2017, 0 ,9));
print_r(array_slice($_2016, 0 ,9));
print_r(array_slice($_2015, 0 ,9));
print_r(array_slice($_2014, 0 ,9));
print_r(array_slice($_2013, 0 ,9));
print_r(array_slice($_2012, 0 ,9));
print_r(array_slice($_2010, 0 ,9));
print_r(array_slice($_2009, 0 ,9));
print_r(array_slice($_2008, 0 ,9));


?>