<?php

namespace Lenh\Multichain\Tests;

use Lenh\Multichain\MultiChainServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
* This is the abstract class.
*/
abstract class AbstractTestCase extends AbstractPackageTestCase
{
	/**
	* @before
	*/
	public function setConfiguration()
	{
		$this->app->config->set('multichain.node_url', 'http://mchain01.local:4364');
		$this->app->config->set('multichain.rpc_username', 'multichainrpc');
		$this->app->config->set('multichain.rpc_password', 'BwEWojJnTvUCJ8hZ8cZUuKap2aFDnG5dTdSzKDzcUjbG');
	}
	
	/**
	* Get the service provder class.
	*
	* @return string
	*/
	protected function getServiceProviderClass($app)
	{
		return MultiChainServiceProvider::class;
	}
	
	
} 
