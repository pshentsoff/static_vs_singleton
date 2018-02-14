<?php
/**
 * @file        SomeChildObj.php
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

class SomeChildObj extends SomeObj
{

	public function doTest2( int $i ): int
	{
		return $this->doTest( $i );
	}

}
