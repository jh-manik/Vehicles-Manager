<?php

$id = trim($_GET['id']) ?? null;

if ( $id === null ) redirect('../index.php');


$vehicles = (new VehicleManager)->getVehicles();
$vehicle = $vehicles[$id] ?? null;

if ( !$vehicle ) redirect('../index.php');

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	(new VehicleManager)->editVehicle($id, [
		'name'  => dataFilter($_POST['name']),
		'type'  => dataFilter($_POST['type']),
		'price' => dataFilter($_POST['price']),
		'image' => dataFilter($_POST['image'])
	]);

	redirect('../index.php');
}