<?php
namespace Lenh\Multichain\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use GrahamCampbell\TestBench\AbstractPackageTestCase;
use be\kunstmaan\multichain\MultichainClient;
use Lenh\Multichain\MultiChainServiceProvider;

/**
* Service provider test class.
*/

class ServiceProviderTest extends AbstractTestCase
{
	use ServiceProviderTrait;
	
	public function testMultichainIsInjectable()
	{
		$this->assertIsInjectable(MultichainClient::class);
	}
}