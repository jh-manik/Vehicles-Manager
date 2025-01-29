<?php /** @noinspection ALL */

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$inputStatus = (new VehicleManager)->addVehicle([
		'name'  => dataFilter($_POST['name']),
		'type'  => dataFilter($_POST['type']),
		'price' => dataFilter($_POST['price']),
		'image' => dataFilter($_POST['image'])
	]);

	redirect('../index.php');
}