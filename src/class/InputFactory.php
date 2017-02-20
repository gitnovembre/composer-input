<?php namespace Novembre\Input;

use Novembre\Input\Input;
use Novembre\Input\Text;
/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author Djb
*/

class InputFactory
{
	private static $input;

	public static function load($type, $name)
	{
		switch($type)
		{
			case "text" : case "email" :
				return self::$input = new Text($type, $name);
			break;

			default:
				$class_name = ucfirst($type);
				return self::$input = new $class_name($name);
			break;

			return self::$input;
		}
	}

}
