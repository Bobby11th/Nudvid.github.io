<?php
if($_POST["Message"]) {
mail("classicvibe766@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
