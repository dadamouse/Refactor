<?php
class Remove_Control_Flag
{
	public function checkSecuity(array $people)
	{
		$found = '';
		for ($i = 0; $i < count($people); $i++)
		{
			if ($found == '')
			{
				if ($people[$i] == 'Don')
				{
					self::sendAlert();
					$found = 'Don';
				}

				if ($people[$i] == 'John')
				{
					self::sendAlert();
					$found = 'John';
				}
			}
		}

		return $found;
	}

	/*
	 * remove control flag $found
	 */
	public function checkSecuity_refactor()
	{
		$found = self::foundMiscreant();
		return $found;
	}

	private function foundMiscreant()
	{
		for ($i = 0; $i < count($people); $i++)
		{
			if ($people[$i] == 'Don')
			{
				self::sendAlert();
				return 'Don';
			}

			if ($people[$i] == 'John')
			{
				self::sendAlert();
				return 'John';
			}
		}
		return "";
	}

	private function sendAlert()
	{
		echo "發現危險人物！！！！";
	}
}