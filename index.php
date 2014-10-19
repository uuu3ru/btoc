<?php
include ('calc.PbIHOK.php');
require ('z_Smarty/libs/Smarty.class.php');
$smarty = new Smarty ();
$smarty->assign ( "table", $table_ );
$smarty->display ( 'index.tpl' );
