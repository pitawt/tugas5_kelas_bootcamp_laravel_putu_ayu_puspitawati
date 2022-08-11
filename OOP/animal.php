<?php
 class Animal
{
	public $name;
	public $legs = 2;
	public $cold_blooded = "false";

	public function __construct($nama_hewan)
	{
		$this->name = $nama_hewan;

	}
}
?>