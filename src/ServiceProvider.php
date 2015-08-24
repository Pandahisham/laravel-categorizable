<?php

    namespace Tshafer\Categorizable;

    use Cviebrock\EloquentSluggable\SluggableServiceProvider;
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
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
=======
    use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

    class ServiceProvider extends BaseProvider
    {

        protected $packageName = 'categorizable';

>>>>>>> Initial
        public function boot()
        {
            $this->setup( __DIR__ )
                 ->publishMigrations();
        }

<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
        /**
         *
         */
=======
>>>>>>> Initial
        public function register()
        {
            $this->app->register( SluggableServiceProvider::class );
        }
    }
