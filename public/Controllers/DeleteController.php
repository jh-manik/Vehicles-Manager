<?php

$id = trim($_GET['id']) ?? null;

if ( $id === null  ) redirect('../index.php');

$vehicles = (new VehicleManager)->getVehicles();
$vehicle = $vehicles[$id] ?? null;

if ( !$vehicle ) redirect('../index.php');

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	if ( isset($_POST['confirm']) && $_POST['confirm'] === 'yes' ) {
		(new VehicleManager)->deleteVehicle($id);
	}

	redirect('../index.php');
}