<?php
$xml=new DomDocument("1.0", "UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("company.xml");
if(!$xml)
{
	$company=$xml->createElement("company");
	$xml->appendChild($company);
}
else
{
	$company=$xml->firstChild;
}
if(isset($_POST['poka']))
{
	$xml->load("company.xml");
}
if(isset($_POST['submit']))
{
	$fname=$_POST['name'];
	$fage=$_POST['age'];
	$fdept=$_POST['dept'];
	$emp=$xml->createElement("employee");
	$company->appendChild($emp);
	$name=$xml->createElement("name", $fname);
	$emp->appendChild($name);
	$age=$xml->createElement("age", $fage);
	$emp->appendChild($age);
	$dept=$xml->createElement("dept", $fdept);
	$emp->appendChild($dept);
	
	echo"<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("company.xml");
}
?>
