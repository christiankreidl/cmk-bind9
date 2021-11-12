<?php
# PNP4Nagios template for check_mk bind9 checks

$opt[0] = "--vertical-label 'per Second' -l 0 --title \"$NAGIOS_DISP_SERVICEDESC $title\" ";
$def[0] = '';

foreach ($responseStats as $entry) {
   list($stat, $spaces, $color, $nl) = $entry;

   $i = array_search($stat, $NAME);
   if ( $i == false ) {
    continue;
   }
   
   $def[0] .= "DEF:$stat=$RRDFILE[$i]:$DS[$i]:MAX ";
   $def[0] .= "AREA:$stat$color:\"$stat\":STACK ";
//   $def[0] .= "LINE1:$stat$color:\"$stat\" ";
   $def[0] .= "GPRINT:$stat:LAST:\"$spaces%3.1lf$nl\" ";
}

?>
