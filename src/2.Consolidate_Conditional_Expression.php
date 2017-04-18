<?php
Class Consolidate_Conditional_Expression
{
	public function disablilityAmount()
	{
		if ($seniority < 2) return 0;
		if ($monthsDisabled > 12) return 0;
		if ($isPartTime) return 0;
	}

	public function disablilityAmount_refactor_step1()
	{
		if ($seniority < 2 || $monthsDisabled > 12 || $isPartTime) return 0;
	}

	public function disablilityAmount_refactor_step2()
	{
		if (self::isNotEligableForDisability()) return 0;
	}

	private function isNotEligableForDisability()
	{
		return  ($seniority < 2 || $monthsDisabled > 12 || $isPartTime);
	}
}