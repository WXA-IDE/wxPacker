<?php
include "wxPacker.class.php";

$wP = new wxPacker("wxapp");
// print_r($wP->getPack());
$wP->savePack("upload");