<?php

require('VehicleActions.php');
require('VehicleBase.php');
require('FileHandler.php');

class VehicleManager extends VehicleBase implements VehicleActions
{
	use FileHandler;

	public function addVehicle($data): void
    {
	    $vehicles = $this->readData();
	    $vehicles[] = $data;
	    $this->writeData($vehicles);
	}

	public function editVehicle($id, $data): void
    {
	    $vehicles = $this->readData();

	    if ( isset($vehicles[$id]) ) {
	    	$vehicles[$id] = $data;
	    	$this->writeData($vehicles);
	    }
	}

	public function deleteVehicle($id): void
    {
		$vehicles = $this->readData();

		if ( isset( $vehicles[$id] ) ) {
			unset($vehicles[$id]);
			$this->writeData(array_values($vehicles));
		}
	}

	public function getVehicles(): array
    {
		return $this->readData();
	}

	public function getDetails(): array
    {
		return [
			'name'  => $this->name,
			'type'  => $this->type,
			'price' => $this->price,
			'image' => $this->image
	 	];
	}
}