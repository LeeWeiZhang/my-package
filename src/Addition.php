<?php
namespace WeiZhang\MyPackage;

class Addition
{
	private $numbers = [];

	public function __construct(...$numbers)
	{
		$this->numbers = $numbers;
	}

	public function getSum()
	{
		return array_sum($this->numbers);
	}
}