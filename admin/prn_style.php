<?
date_default_timezone_set('Asia/Calcutta');
$fy=$_SESSION[fyear];
$fyear=$_SESSION[fyear];
$fy=$fyear;
$challan="challan".$fy;
require("dbname.php");
?>
<style type="text/css" media="screen">
table {border-collapse:collapse;}
td {height:20px;border:solid black 1px;background:white;font-family:verdana;font-size:10pt;padding-left:2px;padding-right:5px;}
th {border:solid black 1px;background-color:#E1E1E1;font-family:verdana;font-size:10pt;font-weight:bold;text-align:center;height:25px;padding-left:2px;padding-right:5px}
td.header {background:#E1E1E1;font-family:verdana;font-size:10pt;font-weight:bold;}
td.divide {border:solid black 1px;font-family:verdana;font-size:8pt;font-weight:normal;}
td.head {border:solid black 0px;border-bottom:solid black 0px;background-color:#E1E1E1;font-family:verdana;font-size:10pt;text-align:left}
td.headdash {border:dashed black 1px;border-width:0 0 1 0;font-family:verdana;font-size:10pt;text-align:left;font-weight:bold underline}
td.noborder {border:none}
a {text-decoration:none;color:black}
.leftright {border:solid black 1px;border-width:0 1 0 1}
.bottom {border:solid black 1px;border-width:0 0 1 0}
.top {border:solid black 1px;border-width:1 0 0 0}
.lrt {border:solid black 1px;border-width:1 1 0 1}
.noborder {border:solid black 0px}
.big {font-size:13pt}
.l {border:solid black 1px;border-width:0 0 0 1}
.lt {border:solid black 1px;border-width:1 0 0 1}
.rt {border:solid black 1px;border-width: 1 1 1 0}
.atop {vertical-align:top;line-height:20px}
.just {text-align:justify;padding-left:5px}
span {font-family:times;font-size:8pt;}
div#but {text-align:center}
#pbreak {page-break-after:always;height:1px;}
.button {background:url(images/shade.gif);border:solid gray 1px;height:25px;width:70px;text-align:center}
</style>
<style type="text/css" media="print">
/*a:link{color:black;text-decoration:none}
a:visited{color:black;text-decoration:none}
table {border-collapse:collapse;}
td {height:25px;border:solid black 0px;background:white;font-family:verdana;font-size:8pt;padding-left:2px;padding-right:5px;}
th {border:solid black 1px;background-color:#E1E1E1;font-family:verdana;font-size:8pt;font-weight:bold;text-align:center}
td.header {border:solid black 1px;background-color:#E1E1E1;font-family:verdana;font-size:8pt;font-weight:bold;text-align:center}
td.head {border:solid black 1px;border-bottom:solid black 0px;background-color:#E1E1E1;font-family:verdana;font-size:8pt;text-align:left}
td.headdash {border:dashed black 1px;border-width:0 0 1 0;font-family:verdana;font-size:8pt;text-align:left;font-weight:bold underline}
.leftright {border:solid black 1px;border-width:0 1 0 1}
.bottom {border:solid black 1px;border-width:0 0 1 0}
.noborder {border:solid black 0px}
.atop {vertical-align:top;line-height:20px}
.top {border:solid black 1px;border-width:1 0 0 0}
.lrt {border:solid black 1px;border-width:1 1 0 1}
.just {text-align:justify;padding-left:5px}
.big {font-size:13pt}
.l {border:solid black 1px;border-width:0 0 0 1}
.lt {border:solid black 1px;border-width:1 0 0 1}
span {font-family:times;font-size:8pt;}
div#but {display:none;text-align:center}
#pbreak {page-break-after:always;height:1px;}*/
</style>
<style type="text/css" media="print">
table {border-collapse:collapse;}
td {height:20px;border:solid black 1px;background:white;font-family:verdana;font-size:10pt;padding-left:2px;padding-right:5px;}
th {border:solid black 1px;background-color:#E1E1E1;font-family:verdana;font-size:10pt;font-weight:bold;text-align:center;height:25px;padding-left:2px;padding-right:5px}
td.header {background:#E1E1E1;font-family:verdana;font-size:10pt;font-weight:bold;}
td.divide {border:solid black 1px;font-family:verdana;font-size:8pt;font-weight:normal;}
td.head {border:solid black 0px;border-bottom:solid black 0px;background-color:#E1E1E1;font-family:verdana;font-size:10pt;text-align:left}
td.headdash {border:dashed black 1px;border-width:0 0 1 0;font-family:verdana;font-size:10pt;text-align:left;font-weight:bold underline}
td.noborder {border:none}
a {text-decoration:none;color:black}
.leftright {border:solid black 1px;border-width:0 1 0 1}
.bottom {border:solid black 1px;border-width:0 0 1 0}
.top {border:solid black 1px;border-width:1 0 0 0}
.lrt {border:solid black 1px;border-width:1 1 0 1}
.noborder {border:solid black 0px}
.big {font-size:13pt}
.l {border:solid black 1px;border-width:0 0 0 1}
.lt {border:solid black 1px;border-width:1 0 0 1}
.atop {vertical-align:top;line-height:20px}
.just {text-align:justify;padding-left:5px}
span {font-family:times;font-size:8pt;}
div#but {text-align:center}
#pbreak {page-break-after:always;height:1px;}
div#but {display:none;text-align:center}
.button {background:url(images/shade.gif);border:solid gray 1px;height:25px;width:70px;text-align:center}
</style>

