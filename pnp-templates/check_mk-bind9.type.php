<?php
# PNP4Nagios template for check_mk bind9.zones check

# this defines the order in the graph and the colors
$responseStats = array(
  array("A", "   ", "#FF0000", ""),
  array("NS", "   ", "#00FF00", ""),
  array("MX", "   ", "#0000FF", ""),
  array("PTR", "", "#c060ff", ""),
  array("TXT", "", "#ffc000", ""),
  array("CNAME", "", "#a00000", "\\n"), #\\n
  array("AAAA", "", "#E38217", ""),
  array("DS", "   ", "#FCD116", ""),
  array("A6", "   ", "#8B7500", ""),
  array("SOA", "", "#C73F17", ""),
  array("SPF", "", "#EE4000", ""),
  array("DNAME", "", "#691F01", "\\n"),#\\n
  array("AXFR", "", "#FF7722", ""),
  array("SRV", "  ", "#8B7588", ""),
  array("ANY", "  ", "#a000ff", ""),
  array("KEY", "", "#affe00", ""),
  array("WKS", "", "#cccc00", ""),
  array("AFSDB", "", "#cccccc", "\\n"),# \\n
  array("NSEC", "", "#f000f0", ""),
  array("NAPTR", "", "#ff4000", ""),
  array("RRSIG", "", "#00f040", "\\n"),
);

$title = "Type";

include_once("check_mk-bind9.php");

?>
