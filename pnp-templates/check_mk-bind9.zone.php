<?php
# PNP4Nagios template for check_mk bind9.zones check

# this defines the order in the graph and the colors
$responseStats = array(
  array("Success", "     ", "#00f040", ""),
  array("NXRRSET", "     ", "#ff4000", ""),
  array("NXDOMAIN", "   ", "#a00000", ""),
  array("SERVFAIL", " ", "#00b0b0", "\\n"),
  array("authQueryRej", "", "#c060ff", ""),
  array("recursionRej", "", "#f000f0", ""),
  array("transferRej", "", "#ffc000", ""),
  array("updateRej", "", "#cccccc", "\\n"),
);

$title = "Responses";

include_once("check_mk-bind9.php");

?>
