<?php
class Refactor
{
	public function season_charge()
	{
		$summer_start = '2017-07-01';
		$summer_end = '2017-08-30';

		$charge = 0;
		$winterRage = 2;
		$winterServiceCharge = 100;
		$summer_rate = 1;
		$quantity = 5;

		if (date('Y-m-d') < $summer_start || date('Y-m-d') > $summer_end)
		{
			$charge = $quantity * $winterRage + $winterServiceCharge;
		}
		else
		{
			$charge = $quantity * $summer_rate;
		}
	}

	public function season_charge_refactor()
	{
		$charge = 0;
		$quantity = 5;
		if (self::notSummer())
		{
			$charge = winterCharge($quantity);
		}
		else
		{
			$charge = summerCharge($quantity);
		}
	}

	private function notSummer()
	{
		return date('Y-m-d') < $summer_start || date('Y-m-d') > $summer_end;
	}

	private function summerCharge($quantity)
	{
		$summer_rate = 1;
		return $quantity * $summer_rate;
	}

	private function winterCharge($quantity)
	{
		$winterRage = 2;
		$winterServiceCharge = 100;
		return $quantity * $winterRage + $winterServiceCharge;
	}
}
?>