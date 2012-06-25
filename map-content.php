<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/site.inc.php';

$id = mysql_escape_string($_REQUEST['id']);
$sql = "SELECT * FROM map WHERE id='$id'";

$mapItem = $db->get_row($sql);
if($mapItem)
{
	print "<h3>$mapItem->title</h3>";
	print "<p>$mapItem->description</p>";
	if($mapItem->image) print "<p><img src=\"/thumb.php?name=$mapItem->image&width=200\" /></p>";
}
?>