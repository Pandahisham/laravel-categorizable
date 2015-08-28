<?php

    namespace Tshafer\Categorizable;

    use Cviebrock\EloquentSluggable\SluggableServiceProvider;
    use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider
     *
     * @package Tshafer\Categorizable
     */
    class ServiceProvider extends BaseProvider
    {

        /**
         * @var string
         */
        protected $packageName = 'categorizable';

        /**
         *
         */
        public function boot()
        {
            $this->setup( __DIR__ )
                 ->publishMigrations();
        }

        /**
         *
         */
        public function register()
        {
            $this->app->register( SluggableServiceProvider::class );
        }
    }
