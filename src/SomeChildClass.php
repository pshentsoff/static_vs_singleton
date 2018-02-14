<?php
/**
 * @file        SomeChildClass.php
 * @description
 *
 * @version
 * PHP Version  7.1
 *
 * @package     static_vs_singleton
 *
 * @author      Vadim Pshentsov <pshentsoff@gmail.com>
 *
 * @created     14.02.18
 *
 * @since
 *
 */

namespace Pshentsoff\StaticSingleton;


class SomeChildClass extends SomeClass
{

	static public $version = '2.0';

	static public function doTest( int $i ): int
	{
		return parent::doTest( $i );
	}

	static public function doStaticCall( int $i ): int
	{
		return SomeClass::doTest( $i );
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
