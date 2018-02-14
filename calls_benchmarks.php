<?php
/**
 * @file        calls_benchmarks.php
 * @description
 *
 * @version
 * PHP Version  7.1
 *
 * @package     newrobocall
 *
 * @author      Vadim Pshentsov <pshentsoff@gmail.com>
 *
 * @created     12.02.18
 *
 * @since
 *
 */

namespace Pshentsoff\StaticSingleton;

include __DIR__ . '/vendor/autoload.php';

echo 'PHP version: ' . PHP_VERSION . PHP_EOL;

$someObj = new SomeObj();
$someChildObj = new SomeChildObj();

function something_doTest( int $i ): int
{
	return $i;
}

function somethingChild_doTest( int $i ): int
{
	return something_doTest( $i );
}

/**
 * Benchmarks
 */

// bench static method
$starttime = microtime(true);
for ($i = 0; $i< 10*1000*1000; $i++)
	SomeClass::doTest($i);

echo "Static Time:   \t\t\t" , (microtime(true)-$starttime) , " s\n";

// bench object method
$starttime = microtime(true);

for ($i = 0; $i< 10*1000*1000; $i++)
	$someObj->doTest($i);

echo "Object Time:   \t\t\t" , (microtime(true)-$starttime) , " s\n";

// Call static method from class with instance
$starttime = microtime(true);
for ($i = 0; $i< 10*1000*1000; $i++)
	SomeObj::doStaticTest($i);

echo "Static from Object Time:   \t" , (microtime(true)-$starttime) , " s\n";

// bench function
$starttime = microtime(true);

for ($i = 0; $i< 10*1000*1000; $i++)
	something_doTest($i);

echo "Function Time: \t\t\t" , (microtime(true)-$starttime) , " s\n";

// bench child static method
$starttime = microtime(true);
for ($i = 0; $i< 10*1000*1000; $i++)
	SomeChildClass::doTest($i);

echo "Child. Static Time:   \t\t" , (microtime(true)-$starttime) , " s\n";

// bench child static method that call another static method
$starttime = microtime(true);
for ($i = 0; $i< 10*1000*1000; $i++)
	SomeChildClass::doStaticCall($i);

echo "Static from static Time:   \t" , (microtime(true)-$starttime) , " s\n";

// bench object method
$starttime = microtime(true);

for ($i = 0; $i< 10*1000*1000; $i++)
	$someChildObj->doTest2($i);

echo "Child. Object Time:   \t\t" , (microtime(true)-$starttime) , " s\n";

// bench function
$starttime = microtime(true);

for ($i = 0; $i< 10*1000*1000; $i++)
	somethingChild_doTest($i);

echo "Call from Function Time: \t" , (microtime(true)-$starttime) , " s\n";

