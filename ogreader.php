<?php
ini_set('memory_limit',-1);
$url = 'http://9gag.com/';
$tags=array();

$html= file_get_contents($url);


$html=explode('<meta',$html);
foreach($html as $m)
  (trim($k=@explode('"',explode('"og:',$m,2)[1],2)[0])!='' OR trim($k=@explode("'",explode("'og:",$m,2)[1],2)[0])!='')
    AND trim($tags[$k]=@explode('"',explode('content="',$m,2)[1],2)[0])==''
     AND $tags[$k]=@explode("'",explode("content='",$m,2)[1],2)[0];
var_dump($tags);
exit;
