<?php
header('Content-Type: text/cache-manifest');
$filesToCache = array(
    './index.html', 
    './js/weather7.js', 
    './css/weather7.css', 
    './img/logo.png', 
    './img/bg.jpg', 
    './img/yahoo-logo.png', 
    '../../dist/js/framework7.ios.min.js', 
    '../../dist/css/framework7.ios.colors.min.css'
);
?>
CACHE MANIFEST

CACHE:
<?php
// Print files that we need to cache and store hash data
$hashes = '';
foreach($filesToCache as $file) {
    echo $file."\n";
    $hashes.=md5_file($file);
};
?>

NETWORK:
*

# Hash Version: <?=md5($hashes)?>