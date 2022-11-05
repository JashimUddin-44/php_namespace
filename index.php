<?php
include "first/myclass.php";
include "second/myclass.php";

use oop_namespace\first\team1;
use oop_namespace\second\team1 as hisclass;

// $oop= new oop_namespace\first\team1; //directory abave valo na lagle use beboher korbo.
// $herclass= new oop_namespace\second\team1; //directory abave valo na lagle use beboher korbo.

$oop= new team1;
$herclass= new hisclass;
$oop->work();
$herclass->work();
?>