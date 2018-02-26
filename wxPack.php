<?php
include "lib/wxPacker.class.php";

$Input = "wxapp_source";
$Output = "Output/wxapp_source.wx";

$wP = new wxPacker( $Input );

// echo $wP->getPack();
// echo $wP->getPackNoGzip();
// $wP->savePack( $Output );
$wP->savePackNoGzip( $Output );