<?php
require('animal.php');

class Katak extends Animal
{
	public $legs = 4;
	public function jump()
	{
		echo "hop hop";
	}
}

?>