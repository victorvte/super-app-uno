<?php
/*
print("<h1>OLA K ASE</h1>");
print "Random:".random_pic();
*/

//setImageHeaders();
returnImageData(chooseRandomPic('icons'));
exit;

function chooseRandomPic($dir = '.'){
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return $files[$file];
}

function setImageHeaders(){
	header('Content-Type: image/jpeg');
}

function returnImageData($image){
    readfile(random_pic());
}



