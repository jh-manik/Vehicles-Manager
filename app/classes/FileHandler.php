<?php

trait FileHandler
{
	private string $dataFile = __DIR__ . '/../../data/vehicles.json';

	public function readData() : array
	{
		if ( !file_exists($this->dataFile) ) {
			file_put_contents($this->dataFile, json_encode([]));
		}

		return json_decode(file_get_contents($this->dataFile), true);
	}

	public function writeData($data) : void
	{
		file_put_contents($this->dataFile, json_encode($data, JSON_PRETTY_PRINT));
	}
}