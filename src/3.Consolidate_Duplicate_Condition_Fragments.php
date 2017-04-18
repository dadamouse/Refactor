<?php
class Consolidate_Duplicate_Condition_Fragments
{
	public function sendDeal()
	{
		if (self::isSpecailDeal())
		{
			$total = $price * 0.95;
			self::send();
		}
		else
		{
			$total = $price * 0.98;
			self::send();	
		}
	}

	public function sendDeal_refactor()
	{
		if (self::isSpecailDeal())
		{
			$total = $price * 0.95;
		}
		else
		{
			$total = $price * 0.98;
		}
		self::send();
	}

	private function isSpecailDeal()
	{
		return self::isSunDay() ? true : false;
	}

	private function isSunDay()
	{
		return (date('D', time()) === 'Sun'); 
	}

	private function send($total)
	{
		echo $total;
	}
}