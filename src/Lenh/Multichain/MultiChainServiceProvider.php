<?php

namespace Lenh\Multichain;

use be\kunstmaan\multichain\MultichainClient;
use Illuminate\Support\ServiceProvider;


    class MultiChainServiceProvider extends ServiceProvider
    {

        /**
         * Defers loading of the component until required.
         *
         * @var boolean
         */
        protected $defer = true;

        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
			$source = realpath(__DIR__.'/../../config/multichain.php');
			
			$this->publishes([$source => config_path('multichain.php')], 'config');
			
			$this->mergeConfigFrom($source, 'multichain');

        }

        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('multichain', function($app)  {
                return new MultichainClient($app['config']['multichain']['node_url'], $app['config']['multichain']['rpc_username'], $app['config']['multichain']['rpc_password'], 3);
            });
			
			$this->app->alias('multichain', MultichainClient::class);
        }

        /**
         * Get service provided by Service Provider
         *
         * @return string
         */
        public function provides(){
            return ['multichain', MultichainClient::class];
        }
    }

