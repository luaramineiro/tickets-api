<?php

namespace App\Http\Helpers;

class Helper
{
	public static function arrayValidationRules()
	{
		return array(
			'required' 	=> 'Field :attribute is required!',
			'max'		=> 'Field :attribute must have at most :max characters!',
			'min'		=> 'Field :attribute must be at least :min characters!',
			'email' 	=> 'Field :attribute must be a valid email!',
			'integer'	=> 'Field :attribute must be a valid integer!'
		);
	}
}