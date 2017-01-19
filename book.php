<?php
$a=$_POST['tnumber'];
$b=$_POST['tname'];
$c=$_POST['atime'];
$d=$_POST['dtime'];
$e=$_POST['avail'];


nt-$_POST[''];
$query="INSERT INTO `bmr`.`train` (`id`, `tnumber`, `tname`, `atime`, `dtime`, `avail`) VALUES ('', $a,$b, $c,$d,$e);";
$result=mysql_query($query);
echo"hello updated";













?>