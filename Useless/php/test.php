<?php
// echo filesize("app")."\n";
function get_all_files( $path ){
  $list = array();
  foreach( glob( $path . '/*') as $item ){
    if( is_dir( $item ) ){
     $list = array_merge( $list , get_all_files( $item ) );
    }
    else{
     $list[] = "/" . $item;
    }
  }
  return $list;
}

$i = "2";
$num = pack("A*","BE");
file_put_contents("temp", $num);

// $sz = filesize("wxapp");
// $sz = pack("N",$sz);
// echo $sz;
// $a = get_all_files("wxapp");
// print_r($a);
exit();

$fileName = "app";
$sz = filesize($fileName);
// $handle=fopen($fileName,"r");
$content=file_get_contents($fileName);
// $num = pack("H",dechex(10));
echo $sz;
echo strlen($content);
exit();
$num = pack("N",$sz);

file_put_contents("temp", $num.$content);
// echo $content;



function fileToHex($file){
	if(file_exists($file)){
		$data = file_get_contents($file);
		return bin2hex($data);
	}
	return '';
}