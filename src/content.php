<?php
// Directory scan 
$files= scandir("images", 0);
// Start JSON array
$out = "[";
// Add to JSON array
foreach ( $files as $f ){
	if ( ($f != "."  ) && ( $f != ".." )){
		$out.="{\"image\":\"" . $f . "\"},";
	}
}
// close JSON array
echo $out . "{\"image\":\"null\"}]";
?>
