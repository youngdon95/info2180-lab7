<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
header("Content-type: text/xml");
print("");
$string = <<<XML
<person>
  <agee>10</agee>
</person>
XML;
$xml = new SimpleXMLElement($string);
echo $xml->asXML();



$query = $_REQUEST['q'];

$definition = [
    "definition" => "a statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "a place that sells alcholic beverages",
    "ajax" => "technique which involves the use of javascript and xml"
];

print $query;
print "<br>";
print($definition[$query]);

?>
