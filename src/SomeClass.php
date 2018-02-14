<?php
/**
 * @file        SomeClass.php
 * @description
 *
 * @version
 * PHP Version  7.1
 *
 * @package     newrobocall
 *
 * @author      Vadim Pshentsov <pshentsoff@gmail.com>
 *
 * @created     14.02.18
 *
 * @since
 *
 */

namespace Pshentsoff\StaticSingleton;

class SomeClass
{

	static public $version = '1.0';

	static public function doTest( int $i ) : int
	{
		return $i;
	}

	static public function getVersion(): string
	{
		return static::$version;
	}

	static public function getVersionSelf(): string
	{
		return self::$version;
	}
}
