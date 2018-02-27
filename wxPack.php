<?php
include "lib/wxPacker.class.php";	//1.0.200

$Input = "Input/wxapp_source";
$Output = "Output/wxapp_source.wx";

$wP = new wxPacker( $Input );

$wP->Gzip()->ES625()->savePack( $Output );