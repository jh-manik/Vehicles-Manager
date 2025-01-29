<?php

function dataFilter($data) : mixed
{
	$data = trim(htmlspecialchars($data));

	return $data;
}

function redirect(string $uri) : void
{
	header("location: $uri");
	exit;
}