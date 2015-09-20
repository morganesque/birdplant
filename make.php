#!/usr/bin/php
<?php

for ($i=4; $i < 24; $i++) { 
	$filename = $i.'.html';
	$contents = "---\nlayout: default\ntitle: Home'\nstrip: ".$i."\n---";
	file_put_contents($filename, $contents);
}

?>