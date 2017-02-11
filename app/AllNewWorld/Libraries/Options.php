<?php namespace App\Sayang\Libraries;

class Options {
	
	public static function countryOptions($countries)
	{
		$options = [];
	
		foreach ($countries as $country)
		{
			if ($country->country_code != 'BALI')
			{
				$options[$country->id] = $country->country_name;
			}
		}
	
		return $options;
	}
	
	public static function stateOptions($country = 'US')
	{
		$options = array(null=>'Select one');
		
		return array_merge($options, VO::$stateUS);
	}
}
