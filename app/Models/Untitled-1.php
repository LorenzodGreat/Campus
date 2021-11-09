<?php
$con=mysqli_connect('localhost','root','','php_tutorial_2k20');
$fire= mysqli_query($con,"select * from users");
$xml = new XMLWriter();
$xml ->openURI("php://output");
$xml ->startDocument();
$xml ->setIndent(true);
$xml ->startElement('users');
while($row = mysqli_fetch_assoc($fire))
{
    $xml -> startElement('user');
    $xml -> startElement('name');
    $xml -> writeRaw($row['name']);
    $xml -> endElement();
}
$xml -> endElement();
header('Content-type: text/xml');
$xml ->flush();    
?>