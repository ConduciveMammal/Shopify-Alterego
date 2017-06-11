<?php
$dbhost  = 'localhost';
$dbuser  = 'root';
$dbpass  = '';
$dbname  = 'alteregoapi';
$dbtable = 'alteregoproductstest';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$sql = 'SELECT* FROM alteregoproductstest';
mysql_select_db('alteregoapi');
$retval = mysql_query($sql, $conn);

$sqltime = 'SELECT UPDATE_TIME FROM alteregoproductstest';
mysql_select_db($dbname);
// mysql_select_db('alteregoapi');
$sqltimeupdate = mysql_query($sql, $conn);
    
if (!$retval) {
    die('Could not get data: ' . mysql_error());
}

$xmlDoc  = new DOMDocument();
$xmlFile = "lingerie.xml";
$xmlDoc->load($xmlFile);

$dbh = new PDO("mysql:dbname={$dbname};host={$dbhost};port=3306", $dbuser, $dbpass);

$xmlObject = $xmlDoc->getElementsByTagName('product');
$itemCount = $xmlObject->length;
?>