<?php
require_once 'Database.php';

$db = new Database();
$db->initialize();

$db->categoryTree(1);
?>
