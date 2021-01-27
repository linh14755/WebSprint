<?php

$path = 'files/file.txt';

$basename = pathinfo($path, PATHINFO_BASENAME);
$extension = pathinfo($path,PATHINFO_EXTENSION);
$dirname = pathinfo($path,PATHINFO_DIRNAME);
$filename = pathinfo($path,PATHINFO_FILENAME);

echo '<ul>';
echo '<li>PATH: ' . $path . '</li>';
echo '<li>PATHINFO_BASENAME: ' . $basename . '</li>';
echo '<li>PATHINFO_EXTENSION: ' . $extension . '</li>';
echo '<li>PATHINFO_DIRNAME: ' . $dirname . '</li>';
echo '<li>PATHINFO_FILENAME: ' . $filename . '</li>';
echo '</ul>';
