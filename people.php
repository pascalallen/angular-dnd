<?php
require_once "Person.php";

$data = Person::all();

print json_encode($data);

// foreach($people as $p)
// {
// 	print json_encode($p);
// }