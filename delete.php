<?php
$id=$_GET['id'];

$xml=new DOMDocument();
$xml->load('data.xml');

$xpath=new DOMXPATH($xml);
foreach($xpath->query("/root/date[id='$id']")as $node){
    $node->parentNode->removeChild($node);
}
$xml->formatoutput=true;
$xml->save('data.xml');

    header('location:index.php');
?>
