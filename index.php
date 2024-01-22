<?php 

require 'functions.php';
require 'router.php';
require 'Database.php';

$db = new Database();
$orders = $db->query("select * from orders")->fetchAll(PDO::FETCH_ASSOC);