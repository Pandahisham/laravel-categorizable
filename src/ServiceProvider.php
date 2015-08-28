<?php

    namespace Tshafer\Categorizable;

    use Cviebrock\EloquentSluggable\SluggableServiceProvider;
<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
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
=======
    use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;
>>>>>>> Fixes

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

<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
>>>>>>> Initial
=======
        /**
         *
         */
>>>>>>> Fixes
        public function boot()
        {
            $this->setup( __DIR__ )
                 ->publishMigrations();
        }

<<<<<<< c7503b1e158db16eef4a34a3064a444c4492f5dd
<<<<<<< f3547faadd50e0f5cec13ac30661fc2d6421f68e
        /**
         *
         */
=======
>>>>>>> Initial
=======
        /**
         *
         */
>>>>>>> Fixes
        public function register()
        {
            $this->app->register( SluggableServiceProvider::class );
        }
    }
