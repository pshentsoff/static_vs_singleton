<?php
/**
 * @file        SomeObj.php
 * @description
 *
 * @version
 * PHP Version  7.1
 *
 * @package    Pshentsoff\StaticSingleton
 *
 * @author      Vadim Pshentsov <pshentsoff@gmail.com>
 *
 * @created     14.02.18
 *
 * @since
 *
 */

namespace Pshentsoff\StaticSingleton;

class SomeObj
{

	public function doTest( int $i ): int
	{
		return $i;
	}

	static public function doStaticTest( int $i ): int
	{
		return $i;
	}

}
