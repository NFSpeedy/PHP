<?php
function OGReader($url)
{
    $html = file_get_contents($url);
    $tags = explode('<meta property=', $html);
    $y = 0;
    for ($i=0; $i < count($tags); $i++) {
        if (strpos($tags[$i], 'og:') !== false) {
            $OG[$y] = $tags[$i];
            $y++;
        }
    }
    for ($i=0; $i < count($OG); $i++) {
        $list = explode('"', $OG[$i]);
        $finalData[$i] = array($list[1],$list[3]);
    }
    return $finalData;
}

$url = 'http://9gag.com';
$OGs = OGReader($url);
var_dump($OGs);

?>
